<!--[*  $Id: news_user_view.htm  $  *]-->
<!--[* include file="news_user_menu.htm" *]-->
<div class="pn-frontendcontainer">
<!--[pnmodurl modname=News func=view startnum=$startnum assign=returnurl]-->
<!--[pnmodcallhooks hookobject=category hookaction=display module=News returnurl=$returnurl]-->
<!--[section name=news loop=$newsitems]-->
<!--[$newsitems[news]]-->
<!--[/section]-->
<!--[pager display=page rowcount=$pager.numitems limit=$pager.itemsperpage posvar=page]-->
</div>