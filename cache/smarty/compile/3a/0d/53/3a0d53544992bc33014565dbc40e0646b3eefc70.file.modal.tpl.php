<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-01-31 17:51:59
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13471379945a71f42f055d58-05918218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0d53544992bc33014565dbc40e0646b3eefc70' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13471379945a71f42f055d58-05918218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a71f42f059b40_87069174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71f42f059b40_87069174')) {function content_5a71f42f059b40_87069174($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
