<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 17:27:15
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/controllers/customers/helpers/required_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6551106215a43c9e3884ea0-66152671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd7f9217d588254736ecc89ee39fb4f19c00037' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/admin_smash/themes/default/template/controllers/customers/helpers/required_fields.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6551106215a43c9e3884ea0-66152671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'table_fields' => 0,
    'field' => 0,
    'required_class_fields' => 0,
    'required_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43c9e38f7903_03837902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43c9e38f7903_03837902')) {function content_5a43c9e38f7903_03837902($_smarty_tpl) {?>
<a class="btn btn-default" href="#" onclick="if ($('.requiredFieldsParameters:visible').length == 0) $('.requiredFieldsParameters').slideDown('slow'); else $('.requiredFieldsParameters').slideUp('slow'); return false;">
  <i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Set required fields for this section'),$_smarty_tpl);?>

</a>
<div class="clearfix">&nbsp;</div>
<div style="display:none" class="panel requiredFieldsParameters">
  <h3><i class="icon-asterisk"></i> <?php echo smartyTranslate(array('s'=>'Required Fields'),$_smarty_tpl);?>
</h3>
  <form name="updateFields" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;submitFields=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
    <div class="alert alert-info">
      <?php echo smartyTranslate(array('s'=>'Select the fields you would like to be required for this section.'),$_smarty_tpl);?>

      <br/>
      <?php echo smartyTranslate(array('s'=>'Please make sure you are complying with the opt-in legislation applicable in your country.'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th class="fixed-width-xs">
              <input type="checkbox" onclick="checkDelBoxes(this.form, 'fieldsBox[]', this.checked)" class="noborder" name="checkme">
            </th>
            <th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Field Name'),$_smarty_tpl);?>
</span></th>
          </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
          <?php if (!in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_class_fields']->value)) {?>
          <tr>
            <td class="noborder">
              <input type="checkbox" name="fieldsBox[]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> checked="checked"<?php }?> />
            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['field']->value;?>

            </td>
          </tr>
          <?php }?>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="panel-footer">
      <button name="submitFields" type="submit" class="btn btn-default pull-right">
        <i class="process-icon-save "></i> <span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</span>
      </button>
    </div>
  </form>
</div>
<?php }} ?>
