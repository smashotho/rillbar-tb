<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-30 19:52:07
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/modules/custompayments/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13477016655a47e057386892-52842105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed3256b37b55a89d3e47a7abf4e0daaad332f68' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/modules/custompayments/views/templates/admin/configure.tpl',
      1 => 1514652969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13477016655a47e057386892-52842105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a47e0573a1095_81285702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a47e0573a1095_81285702')) {function content_5a47e0573a1095_81285702($_smarty_tpl) {?>
<div class="panel">
    <h3><i class="icon icon-puzzle-piece"></i> <?php echo smartyTranslate(array('s'=>'Custom payments','mod'=>'custompayments'),$_smarty_tpl);?>
</h3>
    <strong><?php echo smartyTranslate(array('s'=>'Add custom payment methods to your store','mod'=>'custompayments'),$_smarty_tpl);?>
</strong>
    <p>
        <?php echo smartyTranslate(array('s'=>'Thank you for using this module!','mod'=>'custompayments'),$_smarty_tpl);?>

    </p>
    <strong><?php echo smartyTranslate(array('s'=>'Quick start','mod'=>'custompayments'),$_smarty_tpl);?>
</strong>
    <ol>
        <li><?php echo smartyTranslate(array('s'=>'Visit the page `Modules and Services > Custom payment methods`','mod'=>'custompayments'),$_smarty_tpl);?>
</li>
        <li><?php echo smartyTranslate(array('s'=>'Configure a payment method','mod'=>'custompayments'),$_smarty_tpl);?>
</li>
        <li><?php echo smartyTranslate(array('s'=>'and click `Save` to show it on your front office','mod'=>'custompayments'),$_smarty_tpl);?>
</li>
        <li>
            <?php echo smartyTranslate(array('s'=>'Full documentation of this module can be found on this page:','mod'=>'custompayments'),$_smarty_tpl);?>

            <a href="http://docs.thirtybees.com/merchants-guide/native-modules/custompayments/" target="_blank">http://docs.thirtybees.com/merchants-guide/native-modules/custompayments/</a>
        </li>
    </ol>
    <em><?php echo smartyTranslate(array('s'=>'This module is based on the original `universalpay` module which you can find on %s. Credits go to PrestaLab.Ru (http://www.prestalab.ru) for making the initial version','mod'=>'custompayments','sprintf'=>array('https://github.com/universalpay/universalpay')),$_smarty_tpl);?>
</em>
</div>
<?php }} ?>
