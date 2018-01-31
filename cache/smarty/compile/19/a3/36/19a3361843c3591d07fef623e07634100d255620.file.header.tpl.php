<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:49:37
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcart/includes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:609826865a71f3a1744f73-66235488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a3361843c3591d07fef623e07634100d255620' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcart/includes/header.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '609826865a71f3a1744f73-66235488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_process' => 0,
    'link' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockcart_cart_flag' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f3a1794b49_94550651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f3a1794b49_94550651')) {function content_5a71f3a1794b49_94550651($_smarty_tpl) {?><a id="blockcart-header" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockcart'),$_smarty_tpl);?>
" rel="nofollow">
  <b><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockcart'),$_smarty_tpl);?>
</b>
  <span class="ajax_cart_quantity"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
  <span class="ajax_cart_product_txt"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
  <span class="ajax_cart_product_txt_s"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Products','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
  <span class="ajax_cart_total"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> style="display: none;"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0) {?>
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
        <?php $_smarty_tpl->tpl_vars['blockcart_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl);?>

      <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['blockcart_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl);?>

      <?php }?>
    <?php }?>
  </span>
  <span class="ajax_cart_no_product"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockcart'),$_smarty_tpl);?>
</span>
</a>
<?php }} ?>
