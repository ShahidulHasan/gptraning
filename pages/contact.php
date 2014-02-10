<link rel="stylesheet" href="css/body.css" type="text/css" />
<div class="body">
<body id="contacts">
    <link rel="stylesheet" type="text/css" href="css/fg_membersite.css" />
    <script type='text/javascript' src='js/gen_validatorv31.js'></script>
    <link rel="stylesheet" type="text/css" href="css/pwdwidget.css" />
    <script src="js/pwdwidget.js" type="text/javascript"></script>      
 

<div id='contBodyR' style="width:40%;float:right;margin-right:30%;">
<div id='fg_membersite' style="margin-top:20px;">
<form id='register' action='' method='post' accept-charset='UTF-8'>
<fieldset style="width:357px;height:350px;">
<legend>Contact<img src="img/contact.png" style="margin-bottom:-20px;background:transparent;"></legend>

<br/>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<input type='hidden' name='active' value='2'/>

<div class='short_explanation'></div>
<input type='text'  class='spmhidip' name='' />

<div><span class='error'></span></div>
<div class='container'>
    <label for='name' ><img src="img/requard.png" style="margin-bottom:3px;background:transparent;">Name: </label><br/>
    <input style="width:350px;background: white url(img/input_r.png) repeat;" type='text' name='name' id='name' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' ><img src="img/requard.png" style="margin-bottom:3px;background:transparent;">Email Address:</label><br/>
    <input style="width:350px;background: white url(img/input_r.png) repeat;"type='text' name='email' id='email' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' ><img src="img/requard.png" style="margin-bottom:3px;background:transparent;">Message:</label><br/>
    <textarea style="width:350px;" type='text' name='username' id='username' maxlength="50" /></textarea><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <div id='register' ></div>  
</div>
<div class='container'>
    <input style="margin-top:-100px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;" type='submit' name='SubmitA' value='Submit' />
</div>

</fieldset>
</form>

<script type='text/javascript'>
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("username","req","Please provide a Message");
</script>


</div>
</div>


</div>