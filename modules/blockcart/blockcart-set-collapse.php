<?php
/**
 * 2007-2016 PrestaShop
 *
 * Thirty Bees is an extension to the PrestaShop e-commerce software developed by PrestaShop SA
 * Copyright (C) 2017 Thirty Bees
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@thirtybees.com so we can send you a copy immediately.
 *
 * @author    Thirty Bees <modules@thirtybees.com>
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2017 Thirty Bees
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * PrestaShop is an internationally registered trademark & property of PrestaShop SA
 */
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
if (isset($_POST['ajax_blockcart_display']) || isset($_GET['ajax_blockcart_display'])) {
    if (Tools::getValue('ajax_blockcart_display') == 'collapse') {
        Context::getContext()->cookie->ajax_blockcart_display = 'collapsed';
        die ('collapse status of the blockcart module updated in the cookie');
    }
    if (Tools::getValue('ajax_blockcart_display') == 'expand') {
        Context::getContext()->cookie->ajax_blockcart_display = 'expanded';
        die ('expand status of the blockcart module updated in the cookie');
    }
    die ('ERROR : bad status setted. Only collapse or expand status of the blockcart module are available.');
} else {
    die('ERROR : No status setted.');
}
