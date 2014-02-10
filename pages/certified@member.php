<link rel="stylesheet" href="css/body.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<div class="body">
<body id="certified">
		<div id="contBodyMain">

		<div id="contBodyL">
		<fieldset style="height:280px;">
		<legend style="margin-left:6px;font-weight:bold;color:#395C71;">Certified</legend>
<form action='' method='post' name='select'>  
<p style="margin-top:15px;margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:5px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='networking' value='Networking' /></p>
<p style="margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:-15px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='php' value='PHP Programming' /></p>
<p style="margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:-15px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='asp' value='ASP Programming' /></p>
<p style="margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:-15px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='net' value='.Net Programming' /></p>
<p style="margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:-15px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='java' value='Jave Programming' /></p>
<p style="margin-left:15px;"><img src="img/checkmark1.png" /> <input style='text-align:left;margin-left:0px;margin-top:-15px;height:22px;width:200px;color:#395C71;background: none;padding:0px;border:0px solid skyblue;' class="hotspot" type='submit' name='hardware' value='Hardware' /></p>
</form>
		</fieldset >
		</div>
		<div id="contBodyR" style="margin-left:6px;height:280px;width:65%;">
		<fieldset  style="height:280px;">
		<legend style="margin-left:8px;font-weight:bold;color:#395C71;">Certified Member</legend>
		
<?php if(isset($_POST['networking'])){ ?>
<?php }?>
<?php if(isset($_POST['php'])){
$ExamNo=1;																			
$ExamType=1; 
$ExamCount=$ExamNo+1;
echo"<br/>";
echo"<br/>";
echo"<div style='width:99%;overflow:auto;height:80%;'>";

	for($ExamNo;$ExamNo<2;$ExamNo++){
exam:	
	$acc=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType'");
	$ac=mysql_num_rows($acc);
if($ac>0){	
$perm=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType' ");
$permis=mysql_fetch_assoc($perm);
$timedate=$permis['exam_date'];
$uid=$permis['uid'];
$certified=$permis['certified'];

$sta=mysql_query("select * from tbadmin where username='$uid'");
$stao=mysql_fetch_assoc($sta);
$id=$stao['id'];
$info=mysql_query("select * from tbregistration where id=$id ");
$infoE=mysql_fetch_assoc($info);
	$email=$infoE['email'];
	$fullname=$infoE['fullname'];
$star=mysql_query("select * from tbuserinfo where id=$id ");
$staro=mysql_fetch_assoc($star);
	$img=$staro['img'];
	$mob=$staro['mob'];
	$address=$staro['address'];
	$post=$staro['post'];
	$comp=$staro['comp'];
	$photo=$staro['photo'];

	
echo"<fieldset style='background:transparent url(img/background1.gif) repeat;border:1px solid #D3D3D3;margin-left:15px;width:93%;height:70px;' >
<img src=\"images/certified-icon.png\" style='margin-left:20px;'/><span style='font-family:Arial Black, Gadget, sans-serif;color:rgb(0,157,220);font-size:12px;'> php $ExamNo certified <br/></span>
<b style='margin-left:20px;color:gray;font-size:12px;'>Name : $fullname  <br/></b>
<b style='margin-left:20px;color:gray;font-size:12px;'>ID : $certified<br/></b>
<b style='margin-left:20px;color:gray;font-size:12px;'>Date : $timedate </b>

</fieldset>";

echo"<div style='width:80%;height:10px;'></div>";
$ExamNo=$ExamNo+1;
	$access=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType'");
	$accessPer=mysql_num_rows($access);																																									
if($accessPer==true){ goto exam ;}	
}else{}
}
}?>
<?php if(isset($_POST['asp'])){ ?>
<?php }?>
<?php if(isset($_POST['net'])){ ?>
<?php }?>
<?php if(isset($_POST['java'])){ ?>
<?php }?>
<?php if(isset($_POST['hardware'])){ ?>
<?php }?>
		</div>
		</fieldset >
		</div>
<?php
echo"<div id='contBodyL' style='margin-top:8px;'>";
echo"<fieldset style='height:125px;'>";	
echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Others</legend>";

echo"</fieldset>";		
echo"</div>";
echo"<div id='contBodyL' style='width:65%;margin-top:8px;'>";
echo"<fieldset style='height:125px;style='width:100%;'>";	
echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Others</legend>";

echo "</fieldset>";	
echo "</div>";
?>
		</div>
</div>