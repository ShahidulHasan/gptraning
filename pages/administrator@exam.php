<?php if($_SESSION['uid']){
echo"<link rel=\"stylesheet\" href=\"css/body.css\" type=\"text/css\"/>";
require_once('class/shahidul.all.class.php');  
require_once('class/shahidulp.class.php');


if (isset($_POST['imges'])){   

$fileTypefs=$_FILES['simg']['type'];
if($fileTypefs=="image/jpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/pjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/JPG"){
$ext=".jpg";
}else if($fileTypefs=="image/XJPG"){
$ext=".jpg";
}else if($fileTypefs=="image/jpg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpg"){
$ext=".jpg";
}else if($fileTypefs=="image/png"){
$ext=".png";
}else if($fileTypefs=="image/x-png"){
$ext=".png";
}else if($fileTypefs=="image/gif"){
$ext=".gif";
}else{
"<br/><div id=\"notify\" style=\"background-color:#FFCCCC; border:solid #90000f 2px; margin: 0 20px 0 20px; font-size:12px; font-weight:bold; color:#FF0000;text-align:center; padding-bottom:5px; padding-top:5px;\">Unknown or Invalid image format<br>Jpeg, Gif, Bitmap, Png is supported format.<br>Now you can try.</div>";
}
$userphoto=uniqid();
$userimg = new ques();
$userimg->load($_FILES['simg']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(160,180);
$userimg->save($userphoto);	

$types = $_POST['stype'];
$exam_no = $_POST['sexam'];
$que_nu = $_POST['sque'];

		$dal=new ExamQue();	
		$dal->types=$types;
		$dal->exam_no=$exam_no;
		$dal->que_nu=$que_nu;
		$dal->photo="question/"."{$userphoto}{$ext}";			
		$dal->examQuesUp();
echo("<script>location.href = 'administrator@exam?single=1';</script>");
} 



if (isset($_POST['upload'])){   

$fileTypefs=$_FILES['photo']['type'];
if($fileTypefs=="image/jpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/pjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpeg"){
$ext=".jpg";
}else if($fileTypefs=="image/JPG"){
$ext=".jpg";
}else if($fileTypefs=="image/XJPG"){
$ext=".jpg";
}else if($fileTypefs=="image/jpg"){
$ext=".jpg";
}else if($fileTypefs=="image/xjpg"){
$ext=".jpg";
}else if($fileTypefs=="image/png"){
$ext=".png";
}else if($fileTypefs=="image/x-png"){
$ext=".png";
}else if($fileTypefs=="image/gif"){
$ext=".gif";
}else{
"<br/><div id=\"notify\" style=\"background-color:#FFCCCC; border:solid #90000f 2px; margin: 0 20px 0 20px; font-size:12px; font-weight:bold; color:#FF0000;text-align:center; padding-bottom:5px; padding-top:5px;\">Unknown or Invalid image format<br>Jpeg, Gif, Bitmap, Png is supported format.<br>Now you can try.</div>";
}
$userphoto=uniqid();
$userimg = new ques();
$userimg->load($_FILES['photo']['tmp_name']);
$userimg->getWidth();
$userimg->getHeight();
$userimg->resize(160,180);
$userimg->save($userphoto);	

$types = $_POST['types'];
$exam_no = $_POST['exam_no'];
$que = $_POST['que'];
$ans_one = $_POST['ans_one'];
$ans_two = $_POST['ans_two'];
$ans_three = $_POST['ans_three'];
$ans_four = $_POST['ans_four'];
$ans = $_POST['ans'];
$que_nu = $_POST['que_nu'];
		$dal=new ExamQue();	
		$dal->types=$types;
		$dal->exam_no=$exam_no;
		$dal->que=$que;
		$dal->ans_one=$ans_one;
		$dal->ans_two=$ans_two;
		$dal->ans_three=$ans_three;
		$dal->ans_four=$ans_four;
		$dal->ans=$ans;
		$dal->que_nu=$que_nu;
		$dal->photo="question/"."{$userphoto}{$ext}";			
		$dal->examQues();
echo("<script>location.href = 'administrator@exam?single=1';</script>");
} 
if(isset($_POST['Submit'])){  
if ($_FILES[csv][size] > 0) { 
require_once('class/shahidul.set.con.php');  
    $file = $_FILES[csv][tmp_name]; 																			//get the csv file
    $handle = fopen($file,"r");    																				//loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 
            mysql_query("INSERT INTO exam_que (types, exam_no, ans, que_nu, que, ans_one, ans_two, ans_three, ans_four, photo) VALUES 
                ( 
                    '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."', 
                    '".addslashes($data[3])."', 
                    '".addslashes($data[4])."', 
                    '".addslashes($data[5])."', 
                    '".addslashes($data[6])."', 
                    '".addslashes($data[7])."', 
                    '".addslashes($data[8])."', 
                    '".addslashes($data[9])."' 
                ) 
            "); 
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 
echo("<script>location.href = 'administrator@exam?success=1';</script>");
}}
echo"<div class='body'>";
		echo"<div id='contBodyMain'>";		
		echo"<div id='contBodyL'>";
		echo"<fieldset style='height:280px;'>";
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Image Upload For Question</legend>";
if(!empty($_GET['success'])){ echo "<b style='margin-left:20px;color:#400000;' >Image Uploaded</b><br/>"; } 
echo"<form action='' method='post' name='form3'>  
  <input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='imge' value='Image-Upload' /> 
</form>";
if(isset($_POST['imge'])){
echo"<form action='' method='post' enctype='multipart/form-data' name='form2' id='form1'>"; 
		echo"<p style='margin-left:20px;margin-top:15px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Type : 
		<select name='stype' style='width:60px;height:22px;margin-left:21px;'>";
		$sql=mysql_query("select * from tbtype order by id ASC");
		while($row=mysql_fetch_array($sql))
		{
			echo '<option value="'.$row['id'].'">'.$row['type'].'</option>';
		}
  echo"</select>";
  echo"</p>";
		echo"<p style='margin-left:20px;margin-top:-40px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Exam No : ";
			echo "<input type='text' name='sexam' style='border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:60px;'>";

echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Que No : ";
			echo"<input type='text' name='sque' style='border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:60px;'>";
  echo"</p>";
  echo"<p style='margin-left:20px;margin-top:-40px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Image : <input style='background:white url(img/input_r.png) repeat;margin-left:12px;width:200px;height:22px;border:1px solid gray;' type='file' name='simg'/></p>";
  echo"<input style='margin-left:212px;margin-top:10px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='imges' value='upload' />";
echo"</form>";
}else{}
	echo"</fieldset>";
	echo"</div>";
	echo"<div id='contBodyL' style='width:65%;'>";
	echo"<fieldset style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Single Question With Image</legend>";
if (!empty($_GET[single])) { echo "<b style='margin-left:20px;color:#400000;' >Question has been uploaded.</b><br/>"; }
echo"<form action='' method='post' name='one'>  
  <input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='one' value='single-upload' /> 
</form>";
if(isset($_POST['one'])){	
	echo"<form action='' method='post' name='single' enctype='multipart/form-data'>";				
		echo"<p style='margin-top:-50px;margin-left:20px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Type :"; 
			echo"<select name='types' style='border:1px solid gray;height:22px;width:150px;margin-left:48px;'>";
					echo"<option value='1' >php</option>";
					echo"<option value='2' >asp</option>";
					echo"<option value='3' >.net</option>";
					echo"<option value='4' >java</option>";
					echo"<option value='5' >jsp</option>";
					echo"<option value='6' >ccna</option>";
			echo"</select>";
		echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Examination No : <input type='text' name='exam_no' style='border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'></p>";
		echo"<p style='margin-left:20px;margin-top:-50px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Question : <input type='text' name='que' style='margin-left:21px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'>";
		echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Question No : <input type='text' name='que_nu' style='margin-left:15px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'></p>";
		echo"<p style='margin-left:20px;margin-top:-50px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Choice One : <input type='text' name='ans_one' style='margin-left:8px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'>";
		echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Choice Two : <input type='text' name='ans_two' style='margin-left:17px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'></p>";
		echo"<p style='margin-left:20px;margin-top:-50px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Choice Three: <input type='text' name='ans_three' style='border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'>";
		echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Choice Four: <input type='text' name='ans_four' style='margin-left:19px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'></p>";
		echo"<p style='margin-left:20px;margin-top:-50px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>Answer : <input type='text' name='ans' style='margin-left:27px;border:1px solid gray;height:20px;background: white url(img/input_r.png) repeat;width:150px;'>";
		echo"<img src='img/requard.png' style='margin-left:5px;margin-bottom:3px;background:transparent;'>Image:<input style='margin-left:54px;background:white url(img/input_r.png) repeat;width:220px;height:22px;border:1px solid gray;' type='file' name='photo'/></p>";
		echo"<p style='margin-left:20px;margin-top:-50px;'><input style='margin-left:493px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='upload' value='Upload' ></p>";		
		echo"</form>";
} 
echo"</fieldset>";
echo"</div>";		
echo"</div>";
echo"<div id='contBodyMain' style='height:150px;width:100%;margin-top:10px;margin-left:auto;' >";

		echo"<div id='contBodyL'>";
		echo"<fieldset style='height:125px;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Question File Upload</legend>";
if(!empty($_GET['success'])){ echo "<b style='margin-left:20px;color:#400000;' >File has been uploaded.</b><br/>"; } 
echo"<form action='' method='post' name='select'>  
  <input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='sel' value='csv-file-upload' /> 
</form>";
if(isset($_POST['sel'])){
echo"<form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'> 
  <p style='margin-left:20px;margin-top:10px;'><img src='img/requard.png' style='margin-bottom:3px;background:transparent;'>CSV FILE : <input name='csv' style='margin-top:5px;background: white url(img/input_r.png) repeat;width:202px;height:22px;border:1px solid gray;' type='file' id='csv' /> </p>
  <input style='margin-left:217px;margin-top:10px;height:20px;width:70px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='Submit' value='upload' /> 
</form>";
}else{}	
	echo"</fieldset>";		
	echo"</div>";
	
	echo"<div id='contBodyL' style='width:65%;'>";
	echo"<fieldset style='height:125px;style='width:100%;'>";	
		echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>View Exam Sedule</legend>";
echo"<div style='float:left;width:30%;'>";
		echo"<form action='' method='post' name='show'>";
		echo"<select name='ty' style='width:60px;height:22px;margin-left:21px;'>";
		$sql=mysql_query("select * from tbtype order by id ASC");
		while($row=mysql_fetch_array($sql))
		{
			echo '<option value="'.$row['id'].'">'.$row['type'].'</option>';
		}
  echo"</select>";	
	echo"<input style='margin-left:10px;margin-top:5px;height:22px;width:100px;color:skyblue;background: white url(img/bg_me.png) repeat;padding:0px;border:1px solid skyblue;' type='submit' name='show' value='Exam-show' />"; 
echo"</form>";
echo"</div>";
echo"<div style='float:left;width:40%;overflow:auto;height:80%;'>";
if(isset($_POST['show'])){
$ty=$_POST['ty'];		
$count=1;
$ExamCount=$count+1;
for($count;$count<$ExamCount;$count++){																			
$sql1=@mysql_query("select * from exam_que where types=$ty AND exam_no=$count");
$row1=@mysql_num_rows($sql1);
if($row1==true){ echo"<div width='100%' style='margin-left:60px;margin-bottom:-13px;margin-top:3px;font-weight:bold;color:#580000;font-size:12px;text-align:left;'>php $count Total Question $row1</div><br/>";$ExamCount++;}else{}																		
}
}else{}
echo"</div>";	
	echo"</fieldset>";		
	echo"</div>";	
echo"</div>";
echo"</div>";		
}else{
echo("<script>location.href = 'userLogin';</script>");
}?>