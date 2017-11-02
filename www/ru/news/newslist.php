<?php
require "../../inc/ru_newslist_core.php";
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

<script>
$(window).scroll(function(){
        bottomhight=$(document).height() - $(window).height() - $(window).scrollTop();
	        if  (bottomhight<100){//滚动到底
           runextnews();
        }
});
</script>

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
<div id="aboutbox" style="margin-top:-20px">
<div id="abouttop"><?=$onenewsdir[name]?></div>

			<ul data-role="listview"  data-inset="true" data-theme="c" class="type-newslist">
            <?php for($i=0;$i<sizeof($arrnews);$i++){?>
				<li><a href="/ru/news/newsview.php/<?=$ndir?>/<?=$arrnews[$i][id]?>/.html"><?=$arrnews[$i][title]?></a></li>
            <?php }?>
			</ul>
            
            <ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d" data-count-theme="b">
            <li><a href="javascript:void(0)"  onClick="runextnews();">более <?=$onenewsdir[name]?></a></li>
            </ul>

</div>

            <div id="pagenum" style="display:none">1</div>
            <div id="ndir" style="display:none"><?=$ndir?></div>   

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