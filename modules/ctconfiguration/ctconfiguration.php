<?php

/**
 * Class CTConfiguration
 *
 * @property $bootstrap
 */
class CTConfiguration extends Module
{
    /**
     * CTConfiguration constructor.
     */
    public function __construct()
    {
        $this->name = 'ctconfiguration';
        $this->tab = 'front_office_features';
        $this->version = '1.0.2';
        $this->author = 'thirty bees community';

        parent::__construct();

        $this->displayName = $this->l('Community Theme Configuration');
        $this->description = $this->l('Configuration for community theme blocks and content.');
        $this->ps_versions_compliancy = ['min' => '1.6.0.3', 'max' => _PS_VERSION_];
        $this->tb_versions_compliancy = '~1.0.1';

        $this->bootstrap = true;
    }

    /**
     * Installs module to PrestaShop
     *
     * @return bool
     */
    public function install()
    {
        parent::install();

        $hooksToUnhook = [
            ['module' => 'blockcategories', 'hook' => 'footer'],
        ];
        foreach ($hooksToUnhook as $unhook) {
            $this->unhookModule($unhook['module'], $unhook['hook']);
        }

        $hooksToInstall = ['displayHeader', 'displayFooterProduct'];
        foreach ($hooksToInstall as $hookName) {
            $this->registerHook($hookName);
        }

        // Disable scenes in config for faster loading, scenes are removed in category template
        Configuration::updateValue('PS_SCENE_FEATURE_ACTIVE', false);

        // Translatable configuration items
        foreach (Language::getLanguages(false) as $language) {
            $idLanguage = (int) $language['id_lang'];

            Configuration::updateValue(
                'CT_CFG_COPYRIGHT_CONTENT',
                [
                    $idLanguage => '&copy; Acme Corporation 2017',
                ]
            );
        }

        return true;
    }

    /**
     * Unhooks a module hook
     *
     * @param string $module
     * @param string $hook
     *
     * @return bool
     */
    protected function unhookModule($module, $hook)
    {
        $id_module = Module::getModuleIdByName($module);
        $id_hook = Hook::getIdByName($hook);

        return Db::getInstance()->delete('hook_module', 'id_module = '.(int) $id_module.' AND id_hook = '.(int) $id_hook);
    }

    /***
     * Uninstalls module from PrestaShop
     *
     * @return bool
     */
    public function uninstall()
    {
        $keysToDrop = [
            'CT_CFG_BLOCKCATEGORIES_FOOTER',
            'CT_CFG_COPYRIGHT_CONTENT',
        ];
        foreach ($keysToDrop as $key) {
            Configuration::deleteByName($key);
        }

        return parent::uninstall();
    }

    /**
     * Compiles and returns module configuration page content
     *
     * @return string
     */
    public function getContent()
    {
        if (Tools::isSubmit('submit'.$this->name)) {
            $this->postProcess();
        }

        $moduleUrl = $this->context->link->getAdminLink('AdminModules').'&configure='.$this->name;

        $fieldSets = [
            'general' => [
                'title'   => $this->l('Module settings'),
                'fields'  => $this->getOptionFields(),
                'buttons' => [
                    'cancelBlock' => [
                        'title' => $this->l('Cancel'),
                        'href'  => $moduleUrl,
                        'icon'  => 'process-icon-cancel',
                    ],
                ],
                'submit'  => [
                    'name'  => 'submit'.$this->name,
                    'title' => $this->l('Save'),
                ],
            ],
        ];

        $h = new HelperOptions();
        $h->token = Tools::getAdminTokenLite('AdminModules');
        $h->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $h->id = Tab::getIdFromClassName('AdminTools');

        return $h->generateOptions($fieldSets);
    }

    /**
     * Processes submitted configuration variables
     */
    protected function postProcess()
    {
        // @TODO Nicer solution ?
        $castFunctions = ['boolval', 'doubleval', 'floatval', 'intval', 'strval'];
        $langIds = Language::getIDs(false);

        $values = [];
        foreach ($this->getOptionFields() as $key => $field) {
            $htmlAllowed = isset($field['html']) && $field['html'];

            if ($field['type'] == 'textareaLang' || $field['type'] == 'textLang') {
                $values[$key] = [];
                foreach ($langIds as $idLang) {
                    $value = Tools::getValue($key.'_'.$idLang);
                    if (isset($field['cast']) && $field['cast'] && in_array($field['cast'], $castFunctions)) {
                        $value = call_user_func($field['cast'], $value);
                    }

                    $values[$key][$idLang] = $value;
                }
            } else {
                $value = Tools::getValue($key);
                if (isset($field['cast']) && $field['cast'] && in_array($field['cast'], $castFunctions)) {
                    $value = call_user_func($field['cast'], $value);
                }

                $values[$key] = $value;
            }

            Configuration::updateValue($key, $values[$key], $htmlAllowed);
        }

        if ($values['CT_CFG_BLOCKCATEGORIES_FOOTER']) {
            $this->hookModule('blockcategories', 'footer');
        } else {
            $this->unhookModule('blockcategories', 'footer');
        }
    }

    /**
     * Return HelperOptions fields that are using in module configuration form.
     *
     * @return array
     */
    protected function getOptionFields()
    {
        return [
            'CT_CFG_BLOCKCATEGORIES_FOOTER' => [
                'title' => $this->l('Show blockcategories footer block'),
                'desc'  => $this->l('If enabled, shows category tree block in the footer.'),
                'cast'  => 'boolval',
                'type'  => 'bool',
            ],
            'CT_CFG_COPYRIGHT_CONTENT'      => [
                'title' => $this->l('Copyright footer text'),
                'desc'  => $this->l('Text to be displayed in the copyright footer block.').' '.$this->l('Leave empty to not displayed the block.'),
                'hint'  => $this->l('HTML is allowed. Enter &amp;copy; for copyright symbol.'),
                'cast'  => 'strval',
                'type'  => 'textareaLang',
                'html'  => true,
                'size'  => 50,
            ],
        ];
    }

    /**
     * Registers a module hook
     *
     * @param string $module
     * @param string $hook
     *
     * @return bool
     */
    protected function hookModule($module, $hook)
    {
        $module = Module::getInstanceByName($module);

        return $module->registerHook($hook);
    }

    /**
     * Adds assets to page header
     * and passes configuration variables to smarty
     */
    public function hookDisplayHeader()
    {
        // @TODO Cache configuration array with Cache::getInstance()?
        $idLang = (int) $this->context->language->id;
        $this->context->smarty->assign(
            [
                'ctheme' => [
                    'footer' => [
                        'copyright' => [
                            'display' => true,
                            'html'    => Configuration::get('CT_CFG_COPYRIGHT_CONTENT', $idLang),
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Adds JS files to product page
     */
    public function hookDisplayFooterProduct()
    {
        if (Configuration::get('PS_DISPLAY_JQZOOM') == 1) {
            // Remove jQuery Zoom
            $jqZoomPluginPath = Media::getJqueryPluginPath('jqzoom');
            $this->context->controller->removeJS($jqZoomPluginPath['js']);
            $this->context->controller->removeCSS($jqZoomPluginPath['css']);

            // Add new version of jqZoom plugin
            $this->context->controller->addJS($this->_path.'views/js/vendor/jquery.zoom.min.js');
        }
    }
}
