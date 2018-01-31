<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:49:37
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6446119695a71f3a1c2a8f6-42569413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33e777c26223de99cef203c2aeb85094df103c1c' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/index.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6446119695a71f3a1c2a8f6-42569413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f3a1c44dc6_16055105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f3a1c44dc6_16055105')) {function content_5a71f3a1c44dc6_16055105($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
  <ul id="home-page-tabs" class="nav nav-tabs">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

  </ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
  <div class="tab-content">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

  </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
  <div class="row">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

  </div>
<?php }?>
<?php }} ?>
