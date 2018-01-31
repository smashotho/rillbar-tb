<?php /*%%SmartyHeaderCode:17740149575a43b930f027a5-33197634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8beea454d91c5293099401b663bae34f7b71675' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blocksearch/blocksearch-top.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17740149575a43b930f027a5-33197634',
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a43b934056578_76941117',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43b934056578_76941117')) {function content_5a43b934056578_76941117($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 col-md-5" role="search">
  <form id="searchbox" method="get" action="//rillbar-tb:8888/da/search" >
    <input type="hidden" name="controller" value="search" />
    <input type="hidden" name="orderby" value="position" />
    <input type="hidden" name="orderway" value="desc" />
    <div class="input-group input-group-lg">
      <input class="form-control" type="search" id="search_query_top" name="search_query" placeholder="Søg" value="" required aria-label="Search our site">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="submit_search" title="Søg"><i class="icon icon-search"></i></button>
      </span>
    </div>
  </form>
</div>
<?php }} ?>
