<?php
require_once('class/regUser.php');
echo"<link rel='stylesheet' href='css/body.css' type='text/css' />";
echo"<div class='body'>";
echo"<body id='registration'>";
    echo"<link rel='stylesheet' type='text/css' href='css/fg_membersite.css' />";
    echo"<script type='text/javascript' src='js/gen_validatorv31.js'></script>";
    echo"<link rel='stylesheet' type='text/css' href='css/pwdwidget.css' />";
    echo"<script src='js/pwdwidget.js' type='text/javascript'></script>";    
echo"<div id='contBodyR' style='width:27%;float:right;background:transparent;'>";
echo"<div id='fg_membersite' style='margin-top:40px;'>";
echo"<form id='register' action='' method='post' accept-charset='UTF-8'>";
echo"<fieldset >";
echo"<legend>Registration<img src='img/registration.png' style='margin-bottom:-15px;background:transparent;'></legend>";
if($_SESSION['uid']){
if($_SESSION['active']==1 || $_SESSION['active']==2){
echo"<input type='hidden' name='submitted' id='submitted' value='1'/>";
echo"<input type='hidden' name='active' value='2'/>";
echo"<div class='short_explanation'><br/></div>";
echo"<input type='text'  class='spmhidip' name=''/>";
echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='name' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Your Full Name: </label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='text' name='name' id='name' maxlength='50' /><br/>";
    echo"<span id='register_name_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='email' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Email Address:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='email' id='email' maxlength='50' /><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='username' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>UserName:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='username' id='username' maxlength='50' /><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container' style='height:80px;'>";
    echo"<label for='password' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Password:</label><br/>";
    echo"<div class='pwdwidgetdiv' id='thepwddiv' ></div>";
    echo"<noscript>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='password' name='password' id='password' maxlength='50'/>";
    echo"</noscript>";    
    echo"<div id='register_password_errorloc' class='error' style='clear:both'></div>";
echo"</div>";
echo"<div class='container'>";
    echo"<input style='height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='SubmitA' value='Submit' />";
echo"</div>";
}else{echo"You are Registred User";}}else { 
echo"<input type='hidden' name='submitted' id='submitted' value='1'/>";
echo"<input type='hidden' name='active' value='2'/>";
echo"<div class='short_explanation'><br/></div>";
echo"<input type='text'  class='spmhidip' name='' />";

echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='name' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Your Full Name: </label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='text' name='name' id='name' maxlength='50' /><br/>";
    echo"<span id='register_name_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='email' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Email Address:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='email' id='email' maxlength='50' /><br/>";
    echo"<span id='register_email_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='username' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>UserName:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='username' id='username' maxlength='50' /><br/>";
    echo"<span id='register_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container' style='height:80px;'>";
    echo"<label for='password' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Password:</label><br/>";
    echo"<div class='pwdwidgetdiv' id='thepwddiv' ></div>";
    echo"<noscript>";
    echo"<input style='background: white url(img/input_r.png) repeat;' type='password' name='password' id='password' maxlength='50' />";
    echo"</noscript>";    
    echo"<div id='register_password_errorloc' class='error' style='clear:both'></div>";
echo"</div>";

echo"<div class='container'>";
    echo"<input style='height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='SubmitA' value='Submit' />";
echo"</div>";
} 
echo"</fieldset>";
echo"</form>";
?>
<script type='text/javascript'>
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();   
    var frmvalidator  = new Validator('register');
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation('name','req','Please provide your name');
    frmvalidator.addValidation('email','req','Please provide your email address');
    frmvalidator.addValidation('email','email','Please provide a valid email address');
    frmvalidator.addValidation('username','req','Please provide a username');   
    frmvalidator.addValidation('password','req','Please provide a password');
</script>
<?php
echo"</div>";
echo"</div>";
echo"</div>";	
?>