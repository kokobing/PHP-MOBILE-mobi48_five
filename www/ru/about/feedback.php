<?php
require "../../inc/ru_about_core.php";
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
        <div id="aboutbox">


        <style type="text/css">
      #feedback textarea{ width:100%; height:120px; color:#404040;background: transparent none;}
	  .feedbackline{ padding:5px; text-align:left;color:#404040;}
	  #feedback .ui-body-a, .ui-overlay-a {color:#404040 /*{a-body-color}*/;background: transparent none;}
      </style>
      
        
        <div id="feedback">
          <div class="feedbackline">название *：&nbsp;&nbsp;&nbsp;&nbsp;<input id="name" type="text"  ></div>
          <div class="feedbackline">телефон：&nbsp;&nbsp;&nbsp;&nbsp;<input id="tel" type="text" ></div>
          <div class="feedbackline">E-mail *：&nbsp;&nbsp;&nbsp;&nbsp;<input id="email" type="text"  ></div>
          <div class="feedbackline">сообщение *：&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="content"  ></textarea></div>
          <div id="backmenu"><a onClick="sendmsg()"  href="javascript:void(0);">послать</a></div>

        </div>
        
        <div class="clear" ></div>

  
  
      <script language="JavaScript">
function sendmsg() {
	                    if($.trim($("#name").val())==''){alert('Пожалуйста, введите свое имя');return false;}
						if($.trim($("#email").val())=='' || !$("#email").val().match( /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ )){alert('Пожалуйста, введите действующий адрес электронной почты');return false;}
						if($.trim($("#content").val())==''){alert('Пожалуйста, введите ваше сообщение');return false;}	
						
						
						$.post('/ru/about/ajax_feedback.php',{tel:$("#tel").val(),content:$("#content").val(),name:$("#name").val(),email:$("#email").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/ru/';
                         });

}
</script>    








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