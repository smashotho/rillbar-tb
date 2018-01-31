<?php /* Smarty version Smarty-3.1.19-dev, created on 2017-12-27 16:24:20
         compiled from "/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1975644125a43bb24a24dc8-43742289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07562f008101273f06841a38c77e6ddbfa8ca15' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/404.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975644125a43bb24a24dc8-43742289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43bb24a55ef3_91948625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43bb24a55ef3_91948625')) {function content_5a43bb24a55ef3_91948625($_smarty_tpl) {?><div class="pagenotfound jumbotron text-center">
  <h2><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h2>
  <p><?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>
</p>
  <p><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</p>
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
    <div>
      <label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
      <div class="input-group">
        <input id="search_query" name="search_query" type="text" class="form-control" />
        <span class="input-group-btn">
          <button type="submit" name="Submit" value="OK" class="btn btn-primary"><i class="icon icon-search"></i></button>
        </span>
      </div>
    </div>
  </form>
</div>

<nav>
  <ul class="pager">
    <li>
      <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
">&larr; <?php echo smartyTranslate(array('s'=>'Home page'),$_smarty_tpl);?>
</a>
    </li>
  </ul>
</nav>
<?php }} ?>
