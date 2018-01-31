<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:51:58
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12608945665a71f42ee33da8-85539003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad15925ef8f8ad864c1618ab5bbed3a05bff92fa' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/content.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12608945665a71f42ee33da8-85539003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f42ee3d584_70336881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f42ee3d584_70336881')) {function content_5a71f42ee3d584_70336881($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
