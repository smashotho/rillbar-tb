<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:43:58
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/pdf/invoice.style-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15089336185a43bfbe377194-27566769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80928e7e9416501d6640622f57bb8385f300b274' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/pdf/invoice.style-tab.tpl',
      1 => 1503023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15089336185a43bfbe377194-27566769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'font_size_text' => 0,
    'color_border' => 0,
    'table_padding' => 0,
    'color_border_lighter' => 0,
    'color_line_even' => 0,
    'color_line_odd' => 0,
    'font_size_product' => 0,
    'font_size_header' => 0,
    'height_header' => 0,
    'color_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43bfbe3ee4c8_80322201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43bfbe3ee4c8_80322201')) {function content_5a43bfbe3ee4c8_80322201($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['color_header'] = new Smarty_variable("#F0F0F0", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color_border'] = new Smarty_variable("#000000", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color_border_lighter'] = new Smarty_variable("#CCCCCC", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color_line_even'] = new Smarty_variable("#FFFFFF", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color_line_odd'] = new Smarty_variable("#F9F9F9", null, 0);?>
<?php $_smarty_tpl->tpl_vars['font_size_text'] = new Smarty_variable("9pt", null, 0);?>
<?php $_smarty_tpl->tpl_vars['font_size_header'] = new Smarty_variable("9pt", null, 0);?>
<?php $_smarty_tpl->tpl_vars['font_size_product'] = new Smarty_variable("9pt", null, 0);?>
<?php $_smarty_tpl->tpl_vars['height_header'] = new Smarty_variable("20px", null, 0);?>
<?php $_smarty_tpl->tpl_vars['table_padding'] = new Smarty_variable("4px", null, 0);?>

<style>
	table, th, td {
		margin: 0!important;
		padding: 0!important;
		vertical-align: middle;
		font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_text']->value;?>
;
		white-space: nowrap;
	}

	table.product {
		border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		border-collapse: collapse;
	}

	table#addresses-tab tr td {
		font-size: large;
	}

	table#summary-tab {
		padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
		border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}
	table#total-tab {
		padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
		border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}
	table#note-tab {
		padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
		border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}
	table#note-tab td.note{
		word-wrap: break-word;
	}
	table#tax-tab {
		padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
		border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}
	table#payment-tab,
	table#shipping-tab {
		padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
		border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}

	th.product {
		border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}

	tr.discount th.header {
		border-top: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
	}

	tr.product td {
		border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border_lighter']->value;?>
;
	}

	tr.color_line_even {
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_even']->value;?>
;
	}

	tr.color_line_odd {
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_odd']->value;?>
;
	}

	tr.customization_data td {
	}

	td.product {
		vertical-align: middle;
		font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_product']->value;?>
;
	}

	th.header {
		font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
		height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
		vertical-align: middle;
		text-align: center;
		font-weight: bold;
	}

	th.header-right {
		font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
		height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
		vertical-align: middle;
		text-align: right;
		font-weight: bold;
	}

	th.payment,
	th.shipping {
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
		vertical-align: middle;
		font-weight: bold;
	}

	th.tva {
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
		vertical-align: middle;
		font-weight: bold;
	}

	tr.separator td {
		border-top: 1px solid #000000;
	}

	.left {
		text-align: left;
	}

	.fright {
		float: right;
	}

	.right {
		text-align: right;
	}

	.center {
		text-align: center;
	}

	.bold {
		font-weight: bold;
	}

	.border {
		border: 1px solid black;
	}

	.no_top_border {
		border-top:hidden;
		border-bottom:1px solid black;
		border-left:1px solid black;
		border-right:1px solid black;
	}

	.grey {
		background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;

	}

	/* This is used for the border size */
	.white {
		background-color: #FFFFFF;
	}

	.big,
	tr.big td{
		font-size: 110%;
	}
	
	.small, table.small th, table.small td {
		font-size:small;
	}
</style>
<?php }} ?>
