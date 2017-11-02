<?
require "../inc/config_admin.php";//$siteurl CONFIG里的站点域名路径需要为正确的域名
require "../inc/phpqrcode.php";//PHP 二维码类
	
if($_REQUEST[lang]==1){	//中文路径
$qrcodeurl=$siteurl.'/product/productview.php/'.$_REQUEST[pdir2].'/'.$_REQUEST[pid].'/.html';//路径
}

if($_REQUEST[lang]==0){	//英文路径
$qrcodeurl=$siteurl.'/en/product/productview.php/'.$_REQUEST[pdir2].'/'.$_REQUEST[pid].'/.html';//路径
}

if($_REQUEST[lang]==2){	//德文
$qrcodeurl=$siteurl.'/ge/product/productview.php/'.$_REQUEST[pdir2].'/'.$_REQUEST[pid].'/.html';//路径
}
if($_REQUEST[lang]==3){	//西班牙语
$qrcodeurl=$siteurl.'/sp/product/productview.php/'.$_REQUEST[pdir2].'/'.$_REQUEST[pid].'/.html';//路径
}
if($_REQUEST[lang]==4){	//俄语
$qrcodeurl=$siteurl.'/ru/product/productview.php/'.$_REQUEST[pdir2].'/'.$_REQUEST[pid].'/.html';//路径
}
//生成图片 size=1，2，3，4图片小大 ECC图片密度L（低度） M（中等） Q（较好） H(高密度) 二维码越小需要密码越高
QRcode::png($qrcodeurl, false, $_REQUEST[ecc], $_REQUEST[size]);
?>