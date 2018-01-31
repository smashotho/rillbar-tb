<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:36:52
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9078483595a43be14ebf517-10053578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6e89bf65cadbedd37e596badb163721e67974e' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9078483595a43be14ebf517-10053578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43be14ed9216_33875744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43be14ed9216_33875744')) {function content_5a43be14ed9216_33875744($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
  <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
    <article>
      <div id="blockcmsinfo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['id_info'], ENT_QUOTES, 'UTF-8', true);?>
" class="blockcmsinfo-block col-xs-12 col-sm-4">
        <?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>

      </div>
    </article>
  <?php } ?>
<?php }?>
<?php }} ?>
