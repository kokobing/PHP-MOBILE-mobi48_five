<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/cn_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里


$ndir=$getvars[1];//获取伪静态传递参数

//根据目录查找新闻
$strSQL = "select title,intro,id_newsinfo as id,id_newsdir,newsdate from newsinfo  where dele=1 and id_newsdir=$ndir order by ordernum desc limit 0,$setinfo[newsnum]" ;
$objDB->Execute($strSQL);
$arrnews=$objDB->GetRows();

//根据目录ID取新闻目录名称
$strSQL = "select name from newsdir  where id_newsdir=$ndir" ;
$objDB->Execute($strSQL);
$onenewsdir=$objDB->fields();


$pageid=2;//版面管理新闻默认PAGEID=2
$str=getpagesetinfo($pageid,'title,content,intro,pagetitle,keywords,description');//获得版面管理的内容 标题 页面标题 等


$banner_news=getpagesetallpic(2);//版面管理 新闻


?>