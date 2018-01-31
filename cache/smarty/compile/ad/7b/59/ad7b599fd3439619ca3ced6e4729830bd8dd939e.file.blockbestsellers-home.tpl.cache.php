<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:36:53
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132089955a43be15227496-04668352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7b599fd3439619ca3ced6e4729830bd8dd939e' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1514384414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132089955a43be15227496-04668352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43be1523ead5_43954109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43be1523ead5_43954109')) {function content_5a43be1523ead5_43954109($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
  <ul id="blockbestsellers" class="blockbestsellers tab-pane">
    <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
  </ul>
<?php }?>
<!-- /MODULE Block best sellers -->
<?php }} ?>
