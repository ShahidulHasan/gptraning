<?php
require_once('class/shahidul.set.con.php');
	if(isset($_REQUEST['SubmitA'])){
	
		$fullname=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$password=sha1($password);
		$regno=rand(100000,1000000);
		
	$time=mktime(date('H')+6,date('i'),date('s'));
	$regtime= date('H:i:s',$time);    
    $regdate=date('d/m/Y');		
	
	$show="Successfull Registry";
	$err="Error Registry";
	$before="The userName is used before";
$query=mysql_query("select id from tbadmin where username='$username' ");
$check=mysql_num_rows($query);
	if($check==true){
			echo"<div id='cel' style='width:80%;text-align:center;font-weight:bold;margin:0 auto 0 auto;height:15px;color:#580000;font-size:15px;' >$before</div>";
		}else{	
		$sql=mysql_query("insert into tbadmin(username, active) values('$username',3) ");
			if($sql==true){
				$sqlU=mysql_query("select id from tbadmin where username='$username' ");
				$rowU = mysql_fetch_assoc($sqlU);
				$idU=$rowU['id'];
				$sqlP=mysql_query("insert into tbadminpass(id, password) values('$idU','$password') ");	
				if($sqlP==true){
					$sqlF=mysql_query("insert into tbregistration(id, fullname, email, regno, regdate, regtime, active) values('$idU','$fullname','$email','$regno','$regdate','$regtime',3) ");				
				}		
			if($sqlF==true){echo"<div id='cel' style='width:80%;text-align:center;font-weight:bold;margin:0 auto 0 auto;height:15px;color:#580000;font-size:15px;' >$show</div>";}
			else{echo"<div id='cel' style='width:80%;text-align:center;font-weight:bold;margin:0 auto 0 auto;height:15px;color:#580000;font-size:15px;' >$err</div>";}	
			}
	}
}
?>