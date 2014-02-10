<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<style type='text/css'>
* { margin:0;
    padding:0;
}
body {  }
div#menu { margin:5px auto; }
div#copyright {
    font:11px 'Trebuchet MS';
    color:#fff;
    text-indent:30px;
    padding:0px 0 0 0;
}
div#copyright a { color:#00bfff; }
div#copyright a:hover { color:#fff; }
</style>
<?php
require_once('class/shahidul.set.con.php');	
$uid=$_SESSION['uid'];
$active=$_SESSION['active'];
echo"<html style='overflow:hidden;' xmlns='http://www.w3.org/1999/xhtml' xml:lang='en-gb' lang='en-gb' >";
echo"<head>";
echo"<meta http-equiv='content-type' content='text/html; charset=utf-8' />";
echo"<title>gpit | traning center</title>";
echo"<link rel='shortcut icon' href='img/gpit.ico'>";
echo"<link rel='stylesheet' href='css/header.css' type='text/css' />";
echo"<link rel='stylesheet' href='css/footer.css' type='text/css' />";
echo"<link rel='stylesheet' href='css/dropdown.css' type='text/css' />";
    echo"<script type='text/javascript' src='js/shanto.jq.js'></script>";
    echo"<script type='text/javascript' src='js/shanto.aj.js'></script>";	
    echo"<link type='text/css' href='css/menu.css' rel='stylesheet' />";
    echo"<script type='text/javascript' src='js/jquery.js'></script>";
    echo"<script type='text/javascript' src='js/menu.js'></script>";
echo"</head>";
echo"<body>";
echo"<div class='bg'>";
echo"<div class='topbar' >";
echo"<div class='topbar1' >";
echo"<img src='img/gpittraning.gif' style='margin-right:26%;margin-top:48px;'/>";
echo"</div>";
if($_SESSION['uid']){
$sta=mysql_query("select id from tbadmin where username='$uid'");
$stao=mysql_fetch_assoc($sta);
$id=$stao['id'];
$star=mysql_query("select * from tbuserinfo where id=$id ");
$staro=mysql_fetch_assoc($star);
	$img=$staro['img'];
	$mob=$staro['mob'];
	$address=$staro['address'];
	$post=$staro['post'];
	$comp=$staro['comp'];
$s=mysql_query("select img from tbuserinfo where id=$id ");
$st=mysql_num_rows($s);
echo"<div class='topbar2u' >";
if($st==true){echo "<img src='$img' width=21 height=25 style='border:1px skyblue solid;' />";}else{}
if($active==3){
echo"<a href='user@home' style='margin-left:5px;color:skyblue;text-decoration:none;font-size:13px;' >$uid</a><a href='logout' style='color:skyblue;text-decoration:none;font-size:12px;margin-right:19%;' >[ Logout ]</a>";
}else{
echo"<a href='administrator@home' style='margin-left:5px;color:skyblue;text-decoration:none;font-size:13px;' >$uid </a><a href='logout' style='color:skyblue;text-decoration:none;font-size:12px;margin-right:19%;' >[ Logout ]</a>";
}
echo"</div>";
}else{
echo"<div class='topbar2' >"; 
echo"<form action='login' name='ulog' method='post' >";
echo"UserName : <input style='background: white url(img/input_r.png) repeat;' type='text' name='username' />";
echo"Password : <input style='background: white url(img/input_r.png) repeat;font-size:13px;' type='password' name='password' />";
echo"<input style='height:20px;margin-right:18.5%;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='login' value='login' />";
echo"</form>";
echo"</div>";
}
echo"</div>";
echo"</div>";
    echo"<div class='contents'>";
    echo"<div class='bg_a'>";
echo"<div class='bg-c'>";	
echo"<div id='menu'>";
    echo"<ul class='menu'>";
		echo"<li><a href=\"home\" id=\"menu-home\"><span>Home</span></a></li>";
if($active==3){echo"<li><a href=\"user@home\" class=\"parent\" id=\"menu-book\"><span>Exam</span></a>";}
else{ echo"<li><a href=\"administrator@home\" class=\"parent\" id=\"menu-book\"><span>Exam</span></a>";}	
            echo"<ul>";
                echo"<li><a href='user@exam?ExamType=1'><span>php</span></a></li>";
                echo"<li><a href='user@exam?ExamType=2'><span>asp</span></a></li>";
                echo"<li><a href='user@exam?ExamType=3'><span>.net</span></a></li>";
                echo"<li><a href='user@exam?ExamType=4'><span>Java</span></a></li>";
                echo"<li><a href='user@exam?ExamType=5'><span>Jsp</span></a></li>";
                echo"<li><a href='user@exam?ExamType=6'><span>Networking</span></a></li>";
            echo"</ul>";
        echo"</li>";
if($active==3){echo"<li><a href=\"user@home\" class=\"parent\" id=\"menu-book\"><span>Book</span></a>";}
else{ echo"<li><a href=\"administrator@home\" class=\"parent\" id=\"menu-book\"><span>Book</span></a>";}
            echo"<ul>";
                echo"<li><a href='user@book'><span>php Book </span></a></li>";
                echo"<li><a href='user@book'><span>asp.net Book</span></a></li>";
                echo"<li><a href='user@book'><span>Java Book</span></a></li>";
                echo"<li><a href='user@book'><span>Networking</span></a></li>";
            echo"</ul>";
        echo"</li>";
if($active==1){echo"<li><a href=\"registration\" id=\"menu-registration\"><span>Registration</span></a></li>";}
elseif($active==2){}
elseif($active==3){}
else{ echo"<li><a href=\"registration\" id=\"menu-registration\"><span>Registration</span></a></li>";}
if($_SESSION['uid']){  echo"<li><a href=\"user@infomation\" id=\"menu-infomation\"><span>Infomation</span></a></li>";
}else{}
if($_SESSION['uid']){  echo"<li><a href=\"change@password\" id=\"menu-change\"><span>ChangePass</span></a></li>";
}else{}	
	echo"<li><a href='certified@member' id='menu-certified'><span>Certified</span></a></li>";
	echo"<li class='last'><a href='about@us' id='menu-about'><span>About Us</span></a></li>";
    echo"</ul>";
echo"</div>";
echo"<a href='http://apycom.com/'></a>";
?>