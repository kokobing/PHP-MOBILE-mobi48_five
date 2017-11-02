<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/sp_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里



$banner_sy=getlayoutpicnuminfo(33,99,'opicname as pic');//id 2 前99条

$getnewsdir2=getnewsdir2(25);//取出新闻二级目录

?>