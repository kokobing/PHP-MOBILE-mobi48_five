<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/sp_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里


$pageid=39;//版面管理新闻默认PAGEID=19
$str=getpagesetinfo($pageid,'title,content,intro,pagetitle,keywords,description');//获得版面管理的内容 标题 页面标题 等

$pdir1=$getvars[1];
$getproductdir2=getproductdir2($pdir1);//取出指定FATHERID的所有二级目录

//查出一级目录的名称
$strSQL="SELECT name FROM productdir WHERE  id_proddir='".$pdir1."' ";
$objDB->Execute($strSQL);
$fatherinfo=$objDB->fields();

$getproductdir2=getproductdir2(22);

$banner_product=getpagesetallpic(39);//版面管理 新闻

?>