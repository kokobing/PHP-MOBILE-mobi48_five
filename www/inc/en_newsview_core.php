<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/en_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

$ndir=$getvars[1];//获取伪静态传递参数
$nid=$getvars[2];//获取伪静态传递参数

//根据目录ID取新闻目录名称
$strSQL = "select name,intro from newsdir  where id_newsdir=$ndir" ;
$objDB->Execute($strSQL);
$onenewsdir=$objDB->fields();


$pageid=23;//版面管理新闻默认PAGEID=2
$str=getpagesetinfo($pageid,'title,content,intro,pagetitle,keywords,description');//获得版面管理的内容 标题 页面标题 等

//新闻内容
$strSQL = "select id_newsinfo as nid, title,content from newsinfo where id_newsinfo='".$nid."'  " ;
$objDB->Execute($strSQL);
$onenews=$objDB->fields();



?>