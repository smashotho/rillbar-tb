<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:49:37
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16222060665a71f3a1ae0a35-50558255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1adfaa1a1362e6bdf353285aa34e255268fafd98' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16222060665a71f3a1ae0a35-50558255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f3a1b06ce6_21257352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f3a1b06ce6_21257352')) {function content_5a71f3a1b06ce6_21257352($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['htmlitems']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['hook']->value=='top') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='home') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='left') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='right') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='footer') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php }?>
<?php }?>
<?php }} ?>
