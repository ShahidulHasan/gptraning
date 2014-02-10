<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php if($_SESSION['uid']){																								//	session start 
if(isset($_GET['ExamType'])){
require_once('class/shahidul.set.con.php');								  										//	class of connection
require_once('class/shahidul.all.class.php'); 
$ExamType=$_GET['ExamType'];                            										// 	class of entry
$uid=$_SESSION['uid'];																							// 	hold the session value of user
	$idsql=mysql_query("select id from tbadmin where tbadmin.username='$uid'");
	$find=mysql_fetch_assoc($idsql);
	$fid=$find['id'];	
	$oldsql=mysql_query("select * from tbuserinfo where id=$fid ");
	$ol=mysql_num_rows($oldsql);																					
if($ol==true){																							
$ExamNo=1;
exam:
	$acc=mysql_query("select * from tb_certified where exam_no='$ExamNo' and types='$ExamType'");
	$ac=mysql_num_rows($acc);
if($ac==false){																																
																											// 	from for loop if previous exam given  	
$per=mysql_query("select * from tb_exam_permission where exam_no='$ExamNo' and types='$ExamType' and uid='$uid' ");
$permission=mysql_num_rows($per); 																				//	permission sql query check for the exam given or not by user   
$perm=mysql_query("select * from tb_exam_permission where exam_no='$ExamNo' and types='$ExamType' and uid='$uid' ");
$permis=mysql_fetch_assoc($perm);																				//	sql query search for the exam date 
$e_date=$permis['exam_date'];
$date1 = date_create($e_date);																					//	used for create date
$date2= date_format($date1, 'Y-m-d');																			//	used for create date formate
$adjustDate=date("Y-m-d", strtotime($date2."+30 days" ));														//	old date is add with 30 days
$recentDate = date("Y-m-d");																					//	recent date function
if($permission==false || $adjustDate==$adjustDate){  															//	this is used for permission 
if(@$_GET['l']){																							// 	if value hold
$lt=$_GET['l'];    
}else{
	$lt=0;																									//	used defult value 
}
$lim=$lt+1;	
if (isset($_SESSION['targetdate'])) {     																		// 	this use for time counter session
$targetDate = $_SESSION['targetdate'];																		// 	this use for hold time counter session
}else{   																  
$ques=mysql_query("select * from exam_que where exam_no='$ExamNo' and types='$ExamType'");
$time=mysql_num_rows($ques);     
$dateFormat = "d F Y -- g:i a";     
$targetDate = time() + (5000);
$_SESSION['targetdate'] = $targetDate; 
}  
$actualDate = time(); 
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);

																						// check user are login or not																			
echo "<link rel=\"stylesheet\" href=\"css/body.css\" type=\"text/css\" />";
echo "<div class=\"body\">";
?>
<script type="text/javascript">																					//  used for counter function script
		var days =<?php echo $remainingDay; ?>  
		var hours =<?php echo $remainingHour; ?>  
		var minutes =<?php echo $remainingMinutes; ?>  
		var seconds =<?php echo $remainingSeconds; ?> 
		function setCountDown (){
			  seconds--;
			  if (seconds < 0){
				  minutes--;
				  seconds = 59
			  }
			  if (minutes < 0){
				  hours--;
				  minutes = 59
			  }
			  if (hours < 0){
				  days--;
				  hours = 23
			  }
			  document.getElementById("remain").innerHTML ="Your Time "+hours+":"+minutes+":"+seconds;
			  SD=window.setTimeout( "setCountDown()", 1000 );
			  if (minutes == '00' && seconds == '00') { 
					seconds = "00"
					window.clearTimeout(SD)																																			// change timeout message as required
					location.href = "logout"	 									// url for where the destination if time out
				} 
		}
</script>	
<?php															
echo "<div id=\"exam\">";
echo"<div id='cel' style='height:20px;' ><b style='font-size:15px;'>PHP Examination No : $ExamNo</b></div>";																				
echo"This Exam You Will Give One Time In A Month";
echo "<body onload=\"setCountDown();\">";	
echo "<div id=\"remain\"></div>";																				//	this use for show counter			
echo "</body>";
echo "</div><br/>";
echo "<div id=\"que\">";
$ques=mysql_query("select * from exam_que where exam_no='$ExamNo' and types='$ExamType' ");
$que_no=mysql_num_rows($ques);																					// query for know total question   
$querym=mysql_query("select * from exam_que where exam_no='$ExamNo' and types='$ExamType' limit {$lt},1");
$queam=mysql_num_rows($querym);																					//	check if que are finish 
if($queam==false){
	$time_now=mktime(date('H')+6,date('i'),date('s'));															//	function our time zone +6 set  
	$times= date('H:i:s',$time_now);
	$mysqldate = date("Y-m-d"); 																				//	function precent day
	$exam_date="$mysqldate";														
	$exam_time="$times";																						//	function precent time
$uid=$_POST['uid'];
$types=$_POST['types'];
$exam_no=$_POST['exam_no'];
$que_no=$_POST['que_no'];
$ans=$_POST['ans'];
$que_nu=$_POST['que_nu'];
$value=$_POST['radio_ans'];

$dal=new ExamResult();																							//	class call
if($ans==$value){																								//  used for last value of exam result entry
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=1;
	$dal->wrongans=0;
	$dal->blankans=0;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;	
	$dal->rightresult();																						//	call function
}
elseif($value==null){		
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=0;
	$dal->wrongans=0;
	$dal->blankans=1;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;		
	$dal->rightresult();																						//	call function
}
else{	
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=0;
	$dal->wrongans=1;
	$dal->blankans=0;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;		
	$dal->rightresult();																						//	call function
}		
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->exam_date=$exam_date;
	$dal->exam_time=$exam_time;		
	$dal->premission();	
echo("<script>location.href = 'logout';</script>");															//	go to result page for show result
}else{
$query=mysql_query("select * from exam_que where exam_no='$ExamNo' and types='$ExamType' limit {$lt},1");
while($quea=mysql_fetch_assoc($query)){																			//	query of 1 increment view for ques
$ans=$quea['ans'];
$id=$quea['id'];
$exam_no=$quea['exam_no'];
$que=$quea['que'];
$ans_one=$quea['ans_one'];
$ans_two=$quea['ans_two'];
$ans_three=$quea['ans_three'];
$ans_four=$quea['ans_four'];
$types=$quea['types'];
$que_nu=$quea['que_nu'];
$uid=$_SESSION['uid'];
$image=$quea['photo'];
	
	echo"<div id='cel' style='border-left:10px transparent solid;height:60px;border-top:10px transparent solid;' ><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'><b style='color:gray;font-size:15px;'>Question $lim : $que</b></div>";
	echo"<form method='post' action='?l={$lim} & ExamType=$ExamType'>";
	echo"<input type='hidden' name='uid' value='$uid'>";
	echo"<input type='hidden' name='types' value='$types'>";
	echo"<input type='hidden' name='exam_no' value='$exam_no'>";
	echo"<input type='hidden' name='que_no' value='$que_no'>";
	echo"<input type='hidden' name='ans' value='$ans'>";
	echo"<input type='hidden' name='que_nu' value='$que_nu'>";
	echo"<input type='hidden' name='lim' value='$lim'>";
	
	echo"<div style='float:left;width:40%;'>";
	echo"<div id='cel'><input style='margin-top:5px;' type='radio' name='radio_ans' value='$ans_one'> <span style='margin-left:-30px;' >$ans_one</span></div>";
	echo"<div id='cel'><input style='margin-top:5px;' type='radio' name='radio_ans' value='$ans_two'> <span style='margin-left:-30px;' >$ans_two</span></div>";
	echo"<div id='cel'><input style='margin-top:5px;' type='radio' name='radio_ans' value='$ans_three'> <span style='margin-left:-30px;' >$ans_three</span></div>";
	echo"<div id='cel'><input style='margin-top:5px;' type='radio' name='radio_ans' value='$ans_four'> <span style='margin-left:-30px;' >$ans_four</span></div>";

	echo"</div>";
	echo"<div style='float:right;width:40%;'>";
	if($image!=1){
	echo"<span style='float:right;margin-top:5px;margin-right:20px;font-size:11px;'><img src='$image' width='160px' height='110px' style='border:0px gray solid;' /></span><br/>";
	}else{}
	echo"</div>";
	echo"<div id='cel' style='height:60px;width:99%;text-align:center;' >";
	
	echo"<input style='margin-top:30px;margin-right:100px;width:100px;color:skyblue;' type='submit' name='submit' value='Answer' />";
	echo"</div>";
	echo"</form>";

if(isset($_POST['submit'])){																					//	if submit botton press
$lim=$_POST['lim'];
$uid=$_POST['uid'];
$types=$_POST['types'];
$exam_no=$_POST['exam_no'];
$que_no=$_POST['que_no'];
$ans=$_POST['ans'];
$que_nu=$_POST['que_nu'];
$value=$_POST['radio_ans'];

$dal=new ExamResult();																							//  class call
if($ans==$value){																								//	if right	
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=1;
	$dal->wrongans=0;
	$dal->blankans=0;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;		
	$dal->rightresult();																						//	call function
}
elseif($value==null){																							//	if blank	
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=0;
	$dal->wrongans=0;
	$dal->blankans=1;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;	
	$dal->rightresult();																						//	call function
}	
else{																											//	if wrong	
	$dal->uid=$uid;
	$dal->types=$types;
	$dal->exam_no=$exam_no;
	$dal->rightans=0;
	$dal->wrongans=1;
	$dal->blankans=0;
	$dal->que_no=$que_no;
	$dal->que_nu=$que_nu;		
	$dal->rightresult();																						//	call function
   }
  }	
 }
}
echo"</div>";
echo"</div>";																
}
}													
else{																											//	this is used for permission not accissed, if exam is given, date is not pass
	$ExamNo=$ExamNo+1;		
	$ExamCount=$ExamNo+1;
	for($ExamNo;$ExamNo<$ExamCount;$ExamNo++){																			//	for loop check exam no
	$access=mysql_query("select * from exam_que where exam_no='$ExamNo' and types='$ExamType' ");
	$accessPer=mysql_num_rows($access);																			//	check if exam no is incrice
		if($accessPer==true){ goto exam ;}																		// 	if true jume on exam line
	echo"<div width='100%' style='font-weight:bold;color:#580000;font-size:11px;text-align:center;'>You Already Give This Exam</div>";		// 	if all exam are given
	}																											//	end of for loop	
}
								
}else{
$msg="If You Want To Attend The Exam You Need To Give Your Information";
echo("<script>location.href = 'user@infomation?msg=$msg ';</script>");}
}//end of recive ExamType
}else{
echo("<script>location.href = 'user@login';</script>");
}?>