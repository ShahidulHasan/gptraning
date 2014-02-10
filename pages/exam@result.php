<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php if($_SESSION['uid']){
if(isset($_GET['ExamType'])){
$ExamType=$_GET['ExamType'];
$uid=$_SESSION['uid'];
?>
<link rel="stylesheet" href="css/body.css" type="text/css" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="js/jquery.printPage.js" type="text/javascript"></script>
  <script>  
  $(document).ready(function() {
    $(".btnPrint").printPage();
  });
  </script>
<div class="body">
<?php
require_once('class/shahidul.set.con.php');

echo"<div id='exam'>";
if($ExamType==1){echo"PHP Exam Result<br/>"; 
}elseif($ExamType==2){echo"ASP Exam Result<br/>"; 
}elseif($ExamType==3){echo".NET Exam Result<br/>"; 
}elseif($ExamType==4){echo"JAVA Exam Result<br/>"; 
}elseif($ExamType==5){echo"JSP Exam Result<br/>"; 
}elseif($ExamType==6){echo"Networking Exam Result<br/>"; 
}else{echo"NO Exam Result<br/>"; } 
echo"</div>";

echo"<div id='que' style='width:70%;background:none;' >";

$ExamNo=1;																			
$ExamType=$ExamType; 
$ExamCount=$ExamNo+1;
echo"<br/>";
echo"<br/>";
echo"<div style='width:99%;overflow:auto;height:80%;'>";

	for($ExamNo;$ExamNo<2;$ExamNo++){
exam:	
	$acc=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType'");
	$ac=mysql_num_rows($acc);
if($ac>0){

$right=mysql_query("select rightans from tb_result where exam_no='$ExamNo' and types='$ExamType' and uid='$uid' and rightans='1' ");
$rightans=mysql_num_rows($right);

$wrong=mysql_query("select wrongans from tb_result where exam_no='$ExamNo' and types='$ExamType' and uid='$uid' and wrongans='1' ");
$wrongans=mysql_num_rows($wrong);

$blank=mysql_query("select blankans from tb_result where exam_no='$ExamNo' and types='$ExamType' and uid='$uid' and blankans='1' ");
$blankans=mysql_num_rows($blank);

	
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
<img src=\"images/certified-icon.png\" style='margin-left:20px;'/><span style='font-family:Arial Black, Gadget, sans-serif;color:rgb(0,157,220);font-size:12px;'> php $ExamNo certified <a class='btnPrint' href='shahidul/cer.php?username=$uid'><img src=\"images/icon_printer.gif\" style='margin-left:70%;'/></a><br/></span>
<b style='margin-left:20px;color:gray;font-size:12px;'>Name : $fullname  <br/></b>
<b style='margin-left:20px;color:gray;font-size:12px;'>ID : $certified<br/></b>
<b style='margin-left:20px;color:gray;font-size:12px;'>Date : $timedate </b>
<b style='margin-left:40px;color:gray;font-size:12px;'>Blank Ans : $blankans</b>
<b style='margin-left:20px;color:gray;font-size:12px;'>Wrong Ans : $wrongans</b>
<b style='margin-left:20px;color:gray;font-size:12px;'>Right Ans : $rightans</b>


</fieldset>";

echo"<div style='width:80%;height:10px;'></div>";
$ExamNo=$ExamNo+1;
	$access=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType'");
	$accessPer=mysql_num_rows($access);																																									
if($accessPer==true){ goto exam ;}	
}else{}
}
?>
</div>
</div>
<?php 																		
}else{echo"Some Error";}
} else{
echo("<script>location.href = 'userLogin';</script>");
}?>