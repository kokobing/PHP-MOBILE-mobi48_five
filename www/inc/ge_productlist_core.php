<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/ge_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

$pdir2=$getvars[1];//获取伪静态传递参数

$pageid=33;//版面管理默认PAGEID=22
$str=getpagesetinfo($pageid,'title,content,intro,pagetitle,keywords,description');//获得版面管理的内容 标题 页面标题 等


//查出2级目录的名称
$strSQL = "select  name,intro from productdir where id_proddir=$pdir2" ;
$objDB->Execute($strSQL);
$pdir2name=$objDB->fields();

//根据2级目录搜索产品	
$strSQL = "select  title,intro,id_prodinfo as pid,id_proddir from productinfo where id_proddir=$pdir2 and dele='1' order by ordernum desc  limit 0,$setinfo[productnum]" ;
$objDB->Execute($strSQL);
$arrproduct=$objDB->GetRows();	
/**/

?>