<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:16:02
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13169885345a43b932614fd1-36326553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6429f7a38a621911aca1a4d04f4a76a66b331800' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13169885345a43b932614fd1-36326553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43b932684794_58982200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43b932684794_58982200')) {function content_5a43b932684794_58982200($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><section id="blockcontactinfos" class="col-xs-12 col-sm-3">
  <h2 class="footer-title section-title-footer"><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h2>
  <address>
    <ul class="list-unstyled">
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value)) {?>
        <li>
          <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value)) {?>
        <li>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>

        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value)) {?>
        <li>
          <i class="icon icon-phone"></i>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value)) {?>
        <li>
          <i class="icon icon-envelope-alt"></i>
          <?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>

        </li>
      <?php }?>
    </ul>
  </address>
</section>
<?php }} ?>
