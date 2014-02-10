<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('class/shahidul.set.con.php');

$uid=$_POST['username'];
$pw=$_POST['password'];
$pwd=sha1($pw);
if($_POST['login']){

$query=mysql_query("select id from tbadmin where username='{$uid}' and active=1 ");
$login=mysql_num_rows($query);

$queryA=mysql_query("select id from tbadmin where username='{$uid}' and active=2 ");
$loginA=mysql_num_rows($queryA);

$queryU=mysql_query("select id from tbadmin where username='{$uid}' and active=3 ");
$loginU=mysql_num_rows($queryU);

	if($login==true){
		$query1=mysql_query("select * from tbadminpass where password='$pwd' ");
			$login1=mysql_num_rows($query1);
				if($login1==true){
				session_start();
				$_SESSION['uid']=$uid;
				$_SESSION['active']=1;
				echo("<script>location.href = 'administrator@home';</script>");
		}else{
			echo "Wrong Password ";
		}
	}elseif($loginA==true){
		$query1=mysql_query("select * from tbadminpass where password='$pwd' ");
			$login1=mysql_num_rows($query1);
				if($login1==true){
				session_start();
				$_SESSION['uid']=$uid;
				$_SESSION['active']=2;
				echo("<script>location.href = 'administrator@home';</script>");
		}else{
			echo "Wrong Password ";
		}
	}elseif($loginU==true){	
		$query1=mysql_query("select * from tbadminpass where password='$pwd' ");
			$login1=mysql_num_rows($query1);
				if($login1==true){
				session_start();
				$_SESSION['uid']=$uid;
				$_SESSION['active']=3;
				echo("<script>location.href = 'user@home';</script>");
		}else{
			echo "<script>location.href = 'user@login';</script>";
		}
	}else{
		echo "<script>location.href = 'user@login';</script>";
	}
}
?>
