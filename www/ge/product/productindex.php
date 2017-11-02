<?php
require "../../inc/ge_productindex_core.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php if($str[pagetitle]!=''){echo $str[pagetitle];}else{echo $setinfo[title];}?></title>
<meta name="keywords" content="<?php if($str[keywords]!=''){echo $str[keywords];}else{echo $setinfo[keywords];}?>" />
<meta name="description" content="<?php if($str[description]!=''){echo $str[description];}else{echo $setinfo[description];}?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="/inc/css/jquery.mobile.theme-1.3.1.css">
<link rel="stylesheet" type="text/css" href="/inc/css/jquery.mobile.structure-1.3.1.css">

<link rel="stylesheet" type="text/css" href="/inc/css/resetui.css">
<script src="/inc/js/jquery.js"></script>
<script src="/inc/js/custom.js"></script>
<script src="/inc/js/jquery.mobile-1.3.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="/inc/css/flexslider.css">
<script src="/inc/js/jquery.slider.js"></script>

<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
<?php if(trim($setinfo[statistics])!=''){echo $setinfo[statistics];}//统计代码?>
</head>

<body <?php if($setinfo[iscopy]=='1'){echo ' oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false"';}?>>
<!-- page start -->
<div data-role="page" data-theme="c"  id="homeconent">

<!-- header start -->
<?php require "../header.php";?>
<!-- header end-->

<!-- content start -->
<div data-role="content" class="homecontent" data-theme="a">
<div id="contentbox">

        <div id="banner">
        
        <div class="homeslider">
          <ul class="slides">
            <?php for($i=0;$i<sizeof($banner_product);$i++){?>
            <li><img src="/upload/layout/<?=$banner_product[$i][pic]?>" /></li>
            <?php }?>
          </ul>
        </div>
        
        
        </div>

<div id="aboutbox">

        <ul data-role="listview" data-theme="c" data-filter-theme="c" data-divider-theme="c" data-filter="true"  data-inset="true" >
        <?php for($j=0;$j<sizeof($getproductdir2);$j++){?>
            <li><a href="/ge/product/productlist.php/<?=$getproductdir2[$j][id]?>/.html"><?=$getproductdir2[$j][name]?></a></li>
        <?php }?>  
        </ul>

</div>
</div>
</div>
<!-- content end-->


<!-- footer start-->
<?php require "../footer.php";?>
<!-- footer end-->
</div>
<!-- page end -->
</body>
</html>