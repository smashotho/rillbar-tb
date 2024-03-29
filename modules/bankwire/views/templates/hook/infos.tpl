{*
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
 *  PrestaShop is an internationally registered trademark & property of PrestaShop SA
*}

<div class="alert alert-info">
  <img src="{$module_dir|escape:'htmlall':'UTF-8'}bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
  <p><strong>{l s="This module allows you to accept secure payments by bank wire." mod='bankwire'}</strong></p>
  <p>{l s="If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'" mod='bankwire'}</p>
  <p>{l s="That said, you must manually confirm the order upon receiving the bank wire." mod='bankwire'}</p>
</div>
