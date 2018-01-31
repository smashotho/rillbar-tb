<?php /*%%SmartyHeaderCode:15361563935a43b9320be549-98364918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c5969fd01b1426c0d105a1a56090c4143ef0442' => 
    array (
      0 => '/Users/admin/Documents/Rillbar/Rillbar Thirtybees/rillbar-tb/themes/community-theme-default/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1502057452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15361563935a43b9320be549-98364918',
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5a70cad4ddf1a2_67431293',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a70cad4ddf1a2_67431293')) {function content_5a70cad4ddf1a2_67431293($_smarty_tpl) {?>    <nav>
        <div id="block_top_menu" class="sf-contener clearfix col-lg-12">
            <div class="cat-title">Menu</div>
            <ul class="sf-menu clearfix menu-content">
                <li><a href="http://rillbar-tb:8888/da/katalog" title="Katalog">Katalog</a><ul><li><a href="http://rillbar-tb:8888/da/vinyl" title="Vinyl">Vinyl</a></li><li><a href="http://rillbar-tb:8888/da/cd" title="CD">CD</a></li><li><a href="http://rillbar-tb:8888/da/kassetteband" title="Kassettebånd">Kassettebånd</a></li></ul></li><li><a href="supplier" title="Pladeselskaber">Pladeselskaber</a></li>

                                    <li class="sf-search noBack" style="float:right">
                        <form id="searchbox" action="http://rillbar-tb:8888/da/search" method="get">
                            <p>
                                <input type="hidden" name="controller" value="search"/>
                                <input type="hidden" value="position" name="orderby"/>
                                <input type="hidden" value="desc" name="orderway"/>
                                <input type="text" name="search_query"
                                       value=""/>
                            </p>
                        </form>
                    </li>
                            </ul>
        </div>
    </nav>
<?php }} ?>
