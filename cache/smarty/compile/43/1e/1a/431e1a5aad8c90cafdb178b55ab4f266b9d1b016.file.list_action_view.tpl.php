<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:51:26
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13501813185a71f40eb54a68-73614819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431e1a5aad8c90cafdb178b55ab4f266b9d1b016' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13501813185a71f40eb54a68-73614819',
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
  'unifunc' => 'content_5a71f40eb68d53_75608733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f40eb68d53_75608733')) {function content_5a71f40eb68d53_75608733($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
