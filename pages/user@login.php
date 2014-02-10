<?php
session_start();
echo"<link rel='stylesheet' href='css/body.css' type='text/css' />";
echo"<div class='body'>";
  echo"<link rel='STYLESHEET' type='text/css' href='css/fg_membersite.css' />";
  echo"<script type='text/javascript' src='js/gen_validatorv31.js'></script>"; 
echo"<div id='contBodyR' style='width:27%;float:right;background:transparent;'>";
echo"<div id='fg_membersite' style='margin-top:50px;'>";
echo"<form id='login' action='login' method='post' accept-charset='UTF-8'>";
echo"<fieldset >";
echo"<legend >UserLogin<img src='img/lock-icon.png' style='margin-bottom:-15px;background:transparent;'></legend>";
echo"<input type='hidden' name='submitted' id='submitted' value='1'/>";
echo"<div class='short_explanation'><br/><br/><br/></div>";
echo"<div><span class='error'></span></div>";
echo"<div class='container'>";
    echo"<label for='username' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>UserName:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='text' name='username' id='username' maxlength='50' /><br/>";
    echo"<span id='login_username_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
    echo"<label for='password' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Password:</label><br/>";
    echo"<input style='background: white url(img/input_r.png) repeat;'type='password' name='password' id='password' maxlength='50' /><br/>";
    echo"<span id='login_password_errorloc' class='error'></span>";
echo"</div>";
echo"<div class='container'>";
   echo"<input style='height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='login' value='login' />";
echo"</div>";
echo"<a href='registration' ><img src='img/sign_up.png' style='margin-top:50px;background:transparent;'><font style='font-size:15px;' >For Registration...</font></a>";
echo"</fieldset>";
echo"</form>";
?>
<script type='text/javascript'>
    var frmvalidator  = new Validator('login');
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation('username','req','Please provide your username');   
    frmvalidator.addValidation('password','req','Please provide the password');
</script>
<?php
echo"</div>";
echo"</div>";
echo"</div>";	
?>