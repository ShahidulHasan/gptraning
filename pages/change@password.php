<?php if($_SESSION['uid']){																						// check user are login or not
$uid=$_SESSION['uid'];
echo"<link rel=\"stylesheet\" href=\"css/body.css\" type=\"text/css\" />";
echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"css/fg_membersite.css\" />";
echo"<script type='text/javascript' src='js/gen_validatorv31.js'></script>";
echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"css/pwdwidget.css\" />";
echo"<script src=\"js/pwdwidget.js\" type=\"text/javascript\"></script>"; 
require_once('class/shahidul.set.con.php');
require_once('class/shahidul.all.class.php');
if (isset($_POST['SubmitA'])){ 
$old=$_POST['name'];
$old=sha1($old);
$newpass=$_POST['email'];
$newpass=sha1($newpass);
$uid=$_SESSION['uid'];
$repass=$_POST['username'];
$repass=sha1($repass);
	$idsql=mysql_query("select id from tbadmin where tbadmin.username='$uid'");
	$find=mysql_fetch_assoc($idsql);
	$fid=$find['id'];
	$oldsql=mysql_query("select password from tbadminpass where id=$fid ");
	$ol=mysql_fetch_assoc($oldsql);
	$pid=$ol['password'];	
if($pid==$old){
if($newpass==$repass){
$dal=new ChangePass();			
$dal->newpass=$newpass;
$dal->find=$fid;
$dal->changepass();
echo("<script>location.href = 'change@password?msgS=3';</script>");
	}else{ echo("<script>location.href = 'change@password?msgN=1';</script>"); } 
 }else{ echo("<script>location.href = 'change@password?msgV=2';</script>"); }
}
echo"<div class=\"body\">";
echo"<body id=\"change\">";

$msgV="NOT VALID PASSWORD";
$msgN="PASSWORD NOT MATCH";
$msgS="SUCCESSFULLY CHANGED PASSWORD";

if (!empty($_GET[msgN])){
echo"<div width='100%' style='font-weight:bold;color:gray;font-size:14px;text-align:center;'>$msgN</div>";
}
if(!empty($_GET[msgV])){
echo"<div width='100%' style='font-weight:bold;color:gray;font-size:14px;text-align:center;'>$msgV</div>";
}
if(!empty($_GET[msgS])){
echo"<div width='100%' style='font-weight:bold;color:gray;font-size:14px;text-align:center;'>$msgS</div>";
}
echo"<div id='contBodyR' style='width:27%;float:right;background:transparent;'>";
echo"<div id='fg_membersite' style='margin-top:40px;'>";
echo"<form id='register' action='' method='post' accept-charset='UTF-8'>";
echo"<fieldset >";
echo"<legend>ChangePass<img src='img/change.png' style='margin-bottom:-20px;background:none;'></legend>";
echo"<br/>";
echo"<input type='hidden' name='submitted' id='submitted' value='1'/>";
echo"<input type='hidden' name='uid' value='$uid'/>";
echo"<input type='hidden' name='active' value='2'/>";
echo"<div class='short_explanation'></div>";
echo"<input type='text'  class='spmhidip' name='' />";
echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='name' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Old Password : </label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='password' name='name' id='name' maxlength='50' /><br/>";
    echo"<span id='register_name_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='email' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>New Password:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='password' name='email' id='email' maxlength='50' /><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='username' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Re-type New Password:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='password' name='username' id='username' maxlength='50' /><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container' style='height:80px;'>";
echo"<div id='register' >";
echo"</div>";
echo"</div>";
echo"<div class='container'>";
echo"<input style='margin-top:-100px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='SubmitA' value='Submit' />";
echo"</div>";
echo"</fieldset>";
echo"</form>";
?>
<script type='text/javascript'>
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide old password");
    frmvalidator.addValidation("email","req","Please provide a new password");
    frmvalidator.addValidation("username","req","Please retype new password");
<?php
echo"</script>";
echo"</div>";
echo"</div>";
echo"</div>";
}																												//  end doundry of user log 
else{																											//  if user not login
	echo("<script>location.href = 'user@login';</script>");														//  if user not login go to user login page
}?>