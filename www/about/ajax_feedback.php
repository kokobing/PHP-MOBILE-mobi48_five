<?php  
require "../inc/config.php";
require "../inc/function.class.php";

date_default_timezone_set('Asia/Shanghai'); 

$request_tel = $_REQUEST["tel"];
$request_content = $_REQUEST["content"];
$request_name = $_REQUEST["name"];
$request_email = $_REQUEST["email"];


$subject="留言反馈 :".$request_name." -  时间：".date("Y-m-d G:i:s");//主题
//内容
$body="
<br><br>
	   
姓 名 ：".$request_name."<br>
电 话 : ".$request_tel."<br>
邮 箱 : ".$request_email."<br><br>

留言信息 :".nl2br($request_content)."<br><br>

".date("Y")."-".date("m")."-".date("d")."";



$strSQL="INSERT INTO newsinfo(title,content,id_newsdir,indate,newsdate) values('$subject','$body','4',now(),now())";
$objDB->Execute($strSQL);



  $arr['info']="发送留言反馈成功!";
  $myjson= json_encode($arr);
  echo $myjson;




?>

