<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:16:02
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4319639995a43b932d57165-35415637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97beaa480b43e75df2302acd6b7dc0ca25f7b4cf' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blockcontact/nav.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4319639995a43b932d57165-35415637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43b932dc1a98_85159250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43b932dc1a98_85159250')) {function content_5a43b932dc1a98_85159250($_smarty_tpl) {?> <li id="blockcontact-contact" class="blockcontact">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"
           title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>

        </a>
    </li>

    <?php if (!empty($_smarty_tpl->tpl_vars['telnumber']->value)) {?>
    <li id="blockcontact-phone" class="blockcontact">
        <p class="navbar-text">
            <i class="icon icon-phone"></i>
            <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>

            <a class="phone-link" href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
        </p>
    </li>
<?php }?>
<?php }} ?>
