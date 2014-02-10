<?php if($_SESSION['uid']){
session_start(); 																								//	session start 
require_once('class/shahidul.set.con.php');								  										//	class of connection
require_once('class/shahidul.all.class.php');                             										// 	class of entry
$uid=$_SESSION['uid'];																							// 	hold the session value of user
	$idsql=mysql_query("select id from tbadmin where tbadmin.username='$uid'");
	$find=mysql_fetch_assoc($idsql);
	$fid=$find['id'];	
	$oldsql=mysql_query("select * from tbuserinfo where id=$fid ");
	$ol=mysql_num_rows($oldsql);																					
if($ol==true){
echo"<link rel=\"stylesheet\" href=\"css/body.css\" type=\"text/css\" />";
echo"<div class='body'>";
	echo"<div id='contBodyMain'>";

	echo"<div id='contBodyL'>";
	echo"<fieldset style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Others</legend>";

	echo"</fieldset>";
	echo"</div>";
	
	echo"<div id='contBodyL' style='width:65%;'>";
	echo"<fieldset style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Others</legend>";

	echo"</fieldset>";
	echo"</div>";	

		echo"<div id='contBodyL' style='margin-top:7px;'>";
		echo"<fieldset style='height:125px;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Others</legend>";
		
		echo"</fieldset>";		
		echo"</div>";





	echo"<div id='contBodyL' style='width:65%;margin-top:7px;'>";
	echo"<fieldset style='height:125px;style='width:100%;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>View Book</legend>";
		
require_once('class/shahidul.set.con.php'); 
		

echo"<div style='float:left;width:30%;'>";
		echo"<form action='' method='post' name='show'>";
		echo"<select name='ty' style='width:60px;height:22px;margin-left:21px;'>";
		$sql=mysql_query("select * from tbtype order by id ASC");
		while($row=mysql_fetch_array($sql))
		{
			echo '<option value="'.$row['id'].'">'.$row['type'].'</option>';
		}
  echo"</select>";	
	echo"<input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='show' value='Book' />"; 
echo"</form>";
echo"</div>";
echo"<div style='float:left;width:40%;overflow:auto;height:80%;'>";
if(isset($_POST['show'])){
$ty=$_POST['ty'];		
																			
$sql1=@mysql_query("select * from tbbook where types=$ty ");
while ($sr = mysql_fetch_assoc($sql1)) {
$id=$sr['id'];
$ext=$sr['ext'];
if($ext==".pdf"){$format="pdf";}elseif($ext==".swf"){$format="swf";}else{$format="doc";}
$title=$sr['title'];
$types=$sr['types'];
echo "<div width='100%' style='margin-left:60px;margin-bottom:0px;margin-top:3px;font-weight:bold;color:#580000;font-size:12px;text-align:left;'>";
echo "<img src=\"img/books-icon.png\" />
<a href='readbook?id=$id & ext=$ext'>
$title</a>$format</div>";
}

}else{}
echo"</div>";
echo "</fieldset>";
		
echo "</div>";
echo "</div>";			
echo"</div>";
}else{
$msg="If You Want To Read Book You Need To Give Your Information";
echo("<script>location.href = 'user@infomation?msg=$msg ';</script>");
}
}else{
echo("<script>location.href = 'user@login';</script>");
}

?>