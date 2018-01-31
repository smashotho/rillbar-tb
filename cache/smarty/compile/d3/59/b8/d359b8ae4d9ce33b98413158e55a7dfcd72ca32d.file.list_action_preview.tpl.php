<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:51:21
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10387494575a71f409ea1297-19104243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd359b8ae4d9ce33b98413158e55a7dfcd72ca32d' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10387494575a71f409ea1297-19104243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f409eb3b27_97181240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f409eb3b27_97181240')) {function content_5a71f409eb3b27_97181240($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
