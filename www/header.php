<div data-role="header" data-theme="a">
<div id="headertop">
      <div id="headerlogo"><a href="/"><img src="/upload/layout/<?=$logopic?>"></a></div>
      
<div id="menu">
	<ul>
		<a href="#langpanel" data-rel="popup" data-position-to="window" data-transition="flow"><img src="/inc/pics/lang.png" ></a>
        	
		<a class="fr qrcode" href="#qrcode" data-rel="popup" data-position-to="window" data-transition="pop"></a>

		<a href="#left-panel" title="Menu"><img src="/inc/pics/menu_cn.png" style="width: 40px"></a>
	</ul>	
	</div>      
      
</div>

</div>

<div id="langpanel" data-role="popup" >
                <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
                <div>
                    <ul data-role="listview" >
                       <li><a href="/en/">English</a></li>
                       <li><a href="/">Chinese</a></li>
                       <li><a href="/ge/">German</a></li>
                       <li><a href="/sp/">Spanish</a></li>
                       <li><a href="/ru/">Russia</a></li>
                    </ul>
                </div>

            </div>


<div id="qrcode" data-role="popup" class="ui-content" style="max-width:280px">
                <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
                <div class="tc qrcodeImg"><img src='/getqrcode.php?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>' /></div>

            </div>


        <div data-role="panel" id="left-panel" data-display="overlay" data-position="right">
        <ul data-role="listview" >
        	
            <li data-icon="arrow-r"><a href="/" style="font-size:14px;">网站首页</a></li>
                <?php
    $getallpagesetinfo=getallpagesetinfo(1,'2','title,id_pageset as id');//取所有版面1中文 （2只显示首页 1所有页）  0关闭 3只在内页
	for($i=0;$i<sizeof($getallpagesetinfo);$i++){
		$flienameurl='/about/about.php/'.$getallpagesetinfo[$i][id].'/.html';//默认关于我们
		if($getallpagesetinfo[$i][id]==2){$flienameurl='/news/newsindex.php';}//新闻资讯
		if($getallpagesetinfo[$i][id]==19){$flienameurl='/product/productindex.php';}//产品家族
		if($getallpagesetinfo[$i][id]==26){$flienameurl='/product/producthot.php';}//热卖手机
	?>    	
       <li data-icon="arrow-r"><a href="<?=$flienameurl;?>" style="font-size:14px;"><?=$getallpagesetinfo[$i][title]?></a></li>
     <? }?>  

            <li data-icon="delete"><a href="#" data-rel="close" style="font-size:14px;">关闭菜单</a></li>

        </ul>
        
    </div><!-- /panel -->



