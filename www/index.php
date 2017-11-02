<?php
require "./inc/cn_index_core.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
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
<?php require "header.php";?>
<!-- header end-->

<!-- content start -->
<div data-role="content" class="homecontent" data-theme="a">
<div id="contentbox">
        <div id="banner">
        
        <div class="homeslider">
          <ul class="slides">
            <?php for($i=0;$i<sizeof($banner_sy);$i++){?>
            <li><img src="/upload/layout/<?=$banner_sy[$i][pic]?>" /></li>
            <?php }?>
          </ul>
        </div>
        
        
        </div>
        


<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-inset="true" style=" margin:15px;">

    <?php
    $getallpagesetinfo=getallpagesetinfo(1,'2','title,id_pageset as id,intro');//取所有版面1中文 （2只显示首页 1所有页）  0关闭 3只在内页
	for($i=0;$i<sizeof($getallpagesetinfo);$i++){
	?>    	

 
    <div data-role="collapsible" <?php if($getallpagesetinfo[$i][id]==19){?>data-collapsed="false" <?php }?>>
    <h2><?=$getallpagesetinfo[$i][title]?></h2>

    <?php if($getallpagesetinfo[$i][id]==26){?>
            <ul data-role="listview">
            <?php 
			$newproducts=getconnewproduct('5','1','ordernum','home');//前5条 1中文
			for($j=0;$j<sizeof($newproducts);$j++){?>
                <li><a href="/product/productview.php/<?=$newproducts[$j][pdir2]?>/<?=$newproducts[$j][id_prodinfo]?>/.html">
                    <img src="/upload/product/<?php echo getproductpic($newproducts[$j][id_prodinfo]);?>">
                    <h2><?=$newproducts[$j][title]?></h2>
                    <p><?=$newproducts[$j][intro]?></p></a>
                </li>
            <?php }?>  

            </ul>   
    <?php }?>  
   
    <?php if($getallpagesetinfo[$i][id]==19){
	$getproductdir2=getproductdir2(1);
    ?>
        <ul data-role="listview" data-filter-theme="c" data-divider-theme="d" data-filter="true">
        <?php for($j=0;$j<sizeof($getproductdir2);$j++){?>
            <li><a href="/product/productlist.php/<?=$getproductdir2[$j][id]?>/.html"><?=$getproductdir2[$j][name]?></a></li>
        <?php }?>  
        </ul>
    <?php }?>  


    <?php if($getallpagesetinfo[$i][id]==2){?>
        <ul data-role="listview" data-theme="d" data-divider-theme="d">
        
        <?php for($j=0;$j<sizeof($getnewsdir2);$j++){?>
            <li>
            <a href="/news/newslist.php/<?=$getnewsdir2[$j][id]?>/.html">
                <h3><?=$getnewsdir2[$j][name]?></h3>
                <p><?=$getnewsdir2[$j][intro]?></p>
                <p class="ui-li-aside">共有<strong><?php echo getnewsnum(1,$getnewsdir2[$j][id])?></strong>条信息</p>
            </a>
            </li>
        <?php }?>  
            
        </ul>
    <?php }?>  


    <?php if($getallpagesetinfo[$i][id]==27){?>
        <ul data-role="listview" data-filter-theme="c" data-divider-theme="d" >
			<?php
            $getallpagesetinfo=getallpagesetinfo(1,'3','title,id_pageset as id,intro');//取所有版面1中文 （2只显示首页 1所有页）  0关闭 3只在内页
            for($i=0;$i<sizeof($getallpagesetinfo);$i++){
                $flienameurl='/about/about.php/'.$getallpagesetinfo[$i][id].'/.html';//默认关于我们
            ?>    	
            <li><a href="<?=$flienameurl;?>"><?=$getallpagesetinfo[$i][title]?></a></li>
            <?php }?>  
        </ul>
    <?php }?>  

    </div>
<?php }?>  



</div>




        
		<div class="content-primary">
        </div>
        
        
        
</div>
</div>
<!-- content end-->


<!-- footer start-->
<?php require "footer.php";?>
<!-- footer end-->
</div>
<!-- page end -->
</body>
</html>