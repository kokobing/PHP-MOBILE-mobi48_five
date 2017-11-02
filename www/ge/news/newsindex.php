<?php
require "../../inc/ge_newsindex_core.php";
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
            <?php for($i=0;$i<sizeof($banner_news);$i++){?>
            <li><img src="/upload/layout/<?=$banner_news[$i][pic]?>" /></li>
            <?php }?>
          </ul>
        </div>
        
        </div>

<div id="aboutbox">

        <ul data-role="listview" data-theme="d" data-divider-theme="d" data-inset="true">
        
        <?php for($j=0;$j<sizeof($getnewsdir2);$j++){?>
            <li>
            <a href="/ge/news/newslist.php/<?=$getnewsdir2[$j][id]?>/.html">
                <h3><?=$getnewsdir2[$j][name]?></h3>
                <p><?=$getnewsdir2[$j][intro]?></p>
                <p class="ui-li-aside">Total <strong><?php echo getnewsnum(2,$getnewsdir2[$j][id])?></strong> news</p>
            </a>
            </li>
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