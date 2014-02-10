<?php if($_SESSION['uid']){
echo"<link rel='stylesheet' href='css/body.css' type='text/css' />";
if (@$_POST['upload']){
require_once('class/shahidul.set.con.php');   
    $typeList = Array('1' => 'doc', '2' => 'docx', '3' => 'pdf','4'=>'zip','5'=>'ppt','6'=>'pptx','7'=>'swf');
    $caption = $_POST['caption'];
    $types = $_POST['types'];
    $fileName = $_FILES['book']['name'];
    $fileType = substr(strrchr($fileName, '.'), 1);
    $checkType = array_search($fileType, $typeList);
    if (!empty($checkType) && !empty($caption)) {
        $ex = '.' . $typeList[$checkType];
        $file = 'book-' . uniqid();
        $location = "book/" . $file . $ex;
		$active=1;
        $sql = "insert into tbbook(file_path, title, types, ext) values('" . $location . "','" . $caption . "','" . $types . "','" .$ex. "')";
        $query = mysql_query($sql);
        if ($query) {
            move_uploaded_file($_FILES['book']["tmp_name"], "book/" . $file . $ex);
            echo"<font id='msgsuc' style='color:green; margin-left:170px;'></font>";
         }else {
            echo mysql_error();
        }}else {
        echo "<div id=\"notification\" style=\"background-color: rgb(255, 204, 204); border: 2px solid rgb(144, 0, 15); margin: 0pt 20px; font-size: 12px; font-weight: bold; color: rgb(255, 0, 0); text-align: center; padding-bottom: 5px; padding-top: 5px;\">Unknown File Type or Empty Title</div>";
    }
echo("<script>location.href = 'administrator@book?success=1';</script>");	
}   
echo"<div class='body'>";
echo"<div id='contBodyMain'>";		
echo"<div id='contBodyL'>";
echo"<fieldset style='height:280px;'>";
echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Book Upload</legend>";
if (!empty($_GET['success'])){ echo "<b style='margin-left:20px;color:#400000;' >Book has been uploaded.</b><br/>"; }
echo"
<form action='' method='post' name='select'>  
  <input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='sel' value='Book-upload' /> 
</form>";
if(isset($_POST['sel'])){
echo"
<form action='' method='post' enctype='multipart/form-data'>
	<p style='margin-left:20px;margin-top:20px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Type : 
		<select name='types' style='border:1px solid gray;height:22px;width:150px;margin-left:3px;'>
				<option value='1' >php</option>
				<option value='2' >asp</option>
				<option value='3' >.net</option>
				<option value='4' >java</option>
				<option value='5' >jsp</option>
				<option value='6' >ccna</option>
		</select></p>
	<p style='margin-left:20px;margin-top:-45px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Title : <input type='text' name='caption' style='margin-left:5px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'></p> 
	<p style='margin-left:20px;margin-top:10px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Book : <input name='book' style='margin-top:5px;background: white url(img/input_r.png) repeat;width:220px;height:22px;border:1px solid gray;' type='file' id='csv' /> </p>
	<input style='margin-left:217px;margin-top:10px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='upload' value='upload' /> 
</form>";
}else{}
		echo "</fieldset>";
		echo "</div>";
		echo "<div id='contBodyL' style='width:65%;'>";
		echo "<fieldset style='height:280px;'>";
		echo "<legend style='margin-left:8px;font-weight:bold;color:#395C71;'></legend>";

		echo "</fieldset>";
		echo "</div>";
		echo "</div>";
		
echo"<div id='contBodyMain' style='height:150px;width:100%;margin-top:10px;margin-left:auto;' >";
		echo"<div id='contBodyL'>";
		echo"<fieldset style='height:125px;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'></legend>";

		echo"</fieldset>";		
		echo"</div>";





	echo"<div id='contBodyL' style='width:65%;'>";
	echo"<fieldset style='height:125px;style='width:100%;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Uploded Book</legend>";
		
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
echo "</div>";			
}else{
echo("<script>location.href = 'userLogin';</script>");
}?>