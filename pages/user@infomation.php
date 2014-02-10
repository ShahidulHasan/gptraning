<?php if($_SESSION['uid']){													// check user are login or not
echo"<link rel='stylesheet' href='css/body.css' type='text/css' />";
require_once('class/shahidul.set.con.php');																					
$uid=$_SESSION['uid'];
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
	$photo=$staro['photo'];
$info=mysql_query("select * from tbregistration where id=$id ");
$infoE=mysql_fetch_assoc($info);
	$email=$infoE['email'];
require_once('class/shahidul.all.class.php');
require_once('class/shahidulp.class.php');
if (isset($_POST['SubmitA'])){ 
$dal=new InforMation();	 

$uid=$_POST['uid'];
$mob=$_POST['mob'];
$post=$_POST['post'];
$address=$_POST['address'];
$comp=$_POST['comp'];
	$if=mysql_query("select id from tbadmin where username='$uid'");
	$ifid=mysql_fetch_assoc($if);
	$id=$ifid['id'];

$query=mysql_query("select id from tbuserinfo where id=$id ");
$check=mysql_num_rows($query);
	if($check==false){

$fileTypefs=$_FILES['photo']['type'];
if($fileTypefs=="image/jpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/pjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/JPG"){
$ext=".jpg";
}else if($fileTypefs=="image/XJPG"){
$ext=".jpg";
}else if($fileTypefs=="image/jpg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpg"){
$ext=".jpg";
}else if($fileTypefs=="image/png"){
$ext=".png";
}else if($fileTypefs=="image/x-png"){
$ext=".png";
}else if($fileTypefs=="image/gif"){
$ext=".gif";
}else{
"<br/><div id=\"notify\" style=\"background-color:#FFCCCC; border:solid #90000f 2px; margin: 0 20px 0 20px; font-size:12px; font-weight:bold; color:#FF0000;text-align:center; padding-bottom:5px; padding-top:5px;\">Unknown or Invalid image format<br>Jpeg, Gif, Bitmap, Png is supported format.<br>Now you can try.</div>";
goto no ;
}
$userphoto=uniqid();
$userimg = new images();
$userimg->load($_FILES['photo']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(160,180);
$userimg->save($userphoto);

$userp="$userphoto"."1";
$userimg = new images();
$userimg->load($_FILES['photo']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(25,25);
$userimg->save($userp); 
		
$dal->id=$id;
$dal->mob=$mob;	
$dal->post=$post;	
$dal->address=$address;	
$dal->comp=$comp;
$dal->photo="photo/"."{$userphoto}{$ext}";	
$dal->img="photo/"."{$userp}{$ext}";	
$dal->informationins();

no :
}else{	
	$dal->id=$id;
	$dal->mob=$mob;	
	$dal->post=$post;	
	$dal->address=$address;	
	$dal->comp=$comp;	
	$dal->informationins();
	}
}
if (isset($_POST['SubmitP'])){
$uid=$_POST['uid'];
	$if=mysql_query("select id from tbadmin where username='$uid'");
	$ifid=mysql_fetch_assoc($if);
	$id=$ifid['id']; 
$fileTypefs=$_FILES['photo']['type'];
if($fileTypefs=="image/jpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/pjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/JPG"){
$ext=".jpg";
}else if($fileTypefs=="image/XJPG"){
$ext=".jpg";
}else if($fileTypefs=="image/jpg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpg"){
$ext=".jpg";
}else if($fileTypefs=="image/png"){
$ext=".png";
}else if($fileTypefs=="image/x-png"){
$ext=".png";
}else if($fileTypefs=="image/gif"){
$ext=".gif";
}else{
"<br/><div id=\"notify\" style=\"background-color:#FFCCCC; border:solid #90000f 2px; margin: 0 20px 0 20px; font-size:12px; font-weight:bold; color:#FF0000;text-align:center; padding-bottom:5px; padding-top:5px;\">Unknown or Invalid image format<br>Jpeg, Gif, Bitmap, Png is supported format.<br>Now you can try.</div>";
goto end ;
}
$userphoto=uniqid();
$userimg = new images();
$userimg->load($_FILES['photo']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(112,140);
$userimg->save($userphoto);

$userp="$userphoto"."1";
$userimg = new images();
$userimg->load($_FILES['photo']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(22,26);
$userimg->save($userp);

$dal=new InforMation();
	$dal->id=$id;
	$dal->photo="photo/"."{$userphoto}{$ext}";	
	$dal->img="photo/"."{$userp}{$ext}";	
	$dal->infoPChange();
end :
}
echo"<div class='body'>";
echo"<body id='infomation'>";
    echo"<link rel='stylesheet' type='text/css' href='css/fg_membersite.css' />";
    echo"<script type='text/javascript' src='js/gen_validatorv31.js'></script>";
    echo"<link rel='stylesheet' type='text/css' href='css/pwdwidget.css' />";
    echo"<script src='js/pwdwidget.js' type='text/javascript'></script>";      
echo"<div id='contBodyR' style='width:100%;background:transparent;'>";
echo"<div id='fg_membersite' style='margin-top:0px;width:100%;'>";
$msg=$_REQUEST['msg'];
	echo"<div width='100%' style='font-weight:bold;color:#580000;font-size:11px;text-align:center;'>$msg</div>";
echo"<form action='' method='post' name='select'>";
  echo"<input style='margin-left:10px;margin-top:5px;height:20px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='insert' value='Insert' />"; 
  echo"<input style='margin-left:10px;margin-top:5px;height:20px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='view' value='View' />";
$query=mysql_query("select photo from tbuserinfo where id=$id ");
$checkp=mysql_num_rows($query);
	if($checkp==true){  
echo"<input style='margin-left:10px;margin-top:5px;height:20px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='inimg' value='Photo' />";
}
echo"</form>";
if(isset($_POST['insert'])){
echo"<form id='register' action='' method='post' name='i' enctype='multipart/form-data'>";
echo"<fieldset style='border:1px solid #eee;width:95%;background:transparent;'>";
echo"<legend>Information<img src='img/registration.png' style='margin-bottom:-15px;background:transparent;'></legend>";
echo"<fieldset style='border:0px solid #eee;width:25%;background:transparent;'>";
echo"<input type='hidden' name='submitted1' id='submitted' value='1'/>";
echo"<input type='hidden' name='active1' value='2'/>";
echo"<input type='hidden' name='uid' value='$uid'/>";
echo"<input type='text'  class='spmhidip' name='' />";
echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='mob' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Mobile Number: </label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='text' name='mob' id='mob'value='$mob'/><br/>";
    echo"<span id='register_name_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='post' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Post:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='post' id='post'value='$post'/><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='comp' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Company:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='comp' id='comp' value='$comp'/><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"</fieldset>";
echo"<fieldset style='border:0px solid #eee;width:35%;background:transparent;'>";
echo"<input type='hidden' name='submitted' id='submitted' value='1'/>";
echo"<input type='hidden' name='active' value='2'/>";
echo"<input type='text'  class='spmhidip' name='' />";
echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='address'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Address:</label><br/>";
    echo"<textarea style='width:288px;overflow:hidden;background: white url(img/input_r.png) repeat;'type='text' name='address' id='address' >$address</textarea><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>"; 
$query=mysql_query("select id from tbuserinfo where id=$id ");
$check=mysql_num_rows($query);
	if($check==false){
echo"<div class='container'>";
    echo"<label for='photo'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Photo:</label><br/>";
    echo"<input style='background:white url(img/input_r.png) repeat;width:296px;height:25px;border:1px solid gray;' type='file' name='photo' id='photo'/><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
}else{}
echo"<div class='container'>";
    echo"<label for='username' ></label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;width:296px;height:25px;border:1px solid gray;' type='hidden'  id='username' maxlength='50' /><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='username' ></label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;width:296px;height:25px;border:1px solid gray;' type='hidden'  id='username' maxlength='50' /><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container' style='width:90%;'>";
    echo"<input style='margin-top:0px;margin-left:200px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='SubmitA' value='Submit' />";
echo"</div>";
echo"</fieldset>";
echo"</fieldset>";
echo"</form>";
}if(isset($_POST['view'])){
echo"<fieldset style='border:1px solid #eee;width:95%;background:transparent;'>";
echo"<legend>Information<img src='img/registration.png' style='margin-bottom:-15px;background:transparent;'></legend>";

echo"<fieldset style='border:0px solid #eee;width:20%;background:transparent;'>";
	echo"<div class='container'>";
echo"<label for='photo' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Photo:</label><br/>";
echo"<span style='margin-left:6px;font-size:11px;'><img src='$photo' width='99px' height='127px' style='border:1px solid skyblue;' /></span><br/>";
echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='address'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Address:</label><br/>";
echo"<textarea style='margin-left:2px;overflow:hidden;border:0px solid #eee;font-size:11px;background:none;'type='text' name='address' id='address' >$address</textarea>";
echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";

echo"</fieldset>";

echo"<fieldset style='border:0px solid #eee;width:25%;background:transparent;'>";
echo"<br/>";
echo"<div class='container'>";
    echo"<label for='mob' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Mobile Number: </label><br/>";
echo"<span style='margin-left:6px;font-size:11px;'>$mob</span><br/>";
    echo"<span id='register_name_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='post' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Post:</label><br/>";
echo"<span style='margin-left:6px;font-size:11px;'>$post</span><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='post' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Email:</label><br/>";
echo"<span style='margin-left:6px;font-size:11px;'>$email</span><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='comp' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Company:</label><br/>";
echo"<span style='margin-left:6px;font-size:11px;'>$comp</span>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"</fieldset>";

echo"</fieldset>";
}if(isset($_POST['inimg'])){ 
echo"<form id='register' action='' method='post' name='p' enctype='multipart/form-data' >";
echo"<fieldset style='border:1px solid #eee;width:95%;background:transparent;'>";
echo"<legend>Change Photo<img src='img/registration.png' style='margin-bottom:-15px;background:transparent;'></legend>";

echo"<fieldset style='border:0px solid #eee;width:25%;background:transparent;'>";
echo"<input type='hidden' name='uid' value='$uid'/>";
echo"<div class='container'>";
echo"<label for='photo'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Photo:</label><br/>";
echo"<input style='background: white url(img/input_r.png) repeat;width:296px;height:25px;border:1px solid gray;' type='file' name='photo' id='photo'/><br/>";
echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container' style='width:90%;'>";
echo"<input style='margin-top:0px;margin-left:230px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='SubmitP' value='Submit' />";
echo"</div>";
echo"</fieldset>";
echo"</fieldset>";
echo"</form>";
}
echo"</div>";
echo"</div>";
echo"</div>";
}																												//  end doundry of user log 
else{																											//  if user not login
	echo("<script>location.href = 'user@login';</script>");														//  if user not login go to user login page
}?>