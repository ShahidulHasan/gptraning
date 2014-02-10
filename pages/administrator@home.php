<?php if($_SESSION['uid']){
echo"<link rel='stylesheet' href='css/body.css' type='text/css' />";
echo"<div class='body'>";
echo"<div id='contBodyMain'>";
echo"<div id='contBodyL'>";
	echo"<fieldset style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Admin Exam</legend>";
		echo"<p style='margin-top:15px;margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>Networking</a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>PHP Programming</a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>ASP Programming</a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>.Net Programming</a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>Jave Programming</a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@exam'>Hardware</a></span></p>";
	echo"</fieldset >";
echo"</div>";
echo"<div id='contBodyM'>";
	echo"<fieldset  style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Admin Traning</legend>";
		echo"<p style='margin-top:15px;margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> Networking</span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> PHP Programming</span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> ASP Programming</span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> .Net Programming</span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> Jave Programming</span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> Hardware</span></p>";
	echo"</fieldset >";
echo"</div>";
echo"<div id='contBodyR'>";
	echo"<fieldset  style='height:280px;'>";
	echo"<legend style='margin-left:8px;font-weight:bold;color:#395C71;'>Admin Book</legend>";
		echo"<p style='margin-top:15px;margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>Networking </a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>PHP Programming </a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>ASP Programming </a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>.Net Programming </a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>Jave Programming </a></span></p>";
		echo"<p style='margin-left:15px;'><span class='hotspot' ><img src='img/checkmark1.png' /> <a href='administrator@book'>Hardware </a></span></p>";
	echo"</fieldset >";
echo"</div>";
echo"</div>";
echo"<div id='contBodyMain' style='height:150px;width:100%;margin-top:20px;margin-left:auto;' >";
	echo"<fieldset  style='width:98%;height:150px;margin-left:auto;margin-right:auto;border-left:#eee solid 1px;border-top:#eee solid 1px;border-right:transparent solid 1px;border-bottom:transparent solid 1px;'>";

	echo"</fieldset >";		
echo"</div>";
echo"</div>";	
}else{
echo("<script>location.href = 'user@login';</script>");
}?>