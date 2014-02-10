<?php if($_SESSION['uid']){
echo"<link rel=\"stylesheet\" href=\"css/body.css\" type=\"text/css\" />";
echo"<div class=\"body\">";
echo"<div id=\"contBodyMain\">";
echo"<div id=\"contBodyL\">";
	echo"<fieldset style=\"height:280px;\">";
	echo"<legend style=\"margin-left:8px;font-weight:bold;color:#395C71;\">Give Exam</legend>";
		echo"<p style=\"margin-top:15px;margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=6\">Networking</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=1\">PHP Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=2\">ASP Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=3\">.Net Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=4\">Jave Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@exam?ExamType=5\">Jsp Programming</a></span></p>";
	echo"</fieldset >";
echo"</div>";
echo"<div id=\"contBodyM\">";
	echo"<fieldset  style=\"height:280px;\">";
	echo"<legend style=\"margin-left:8px;font-weight:bold;color:#395C71;\">Result Show</legend>";
		echo"<p style=\"margin-top:15px;margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=6\">Networking</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=1\">PHP Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=2\">ASP Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=3\">.Net Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=4\">Jave Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"exam@result?ExamType=5\">Jsp Programming</span></a></p>";
	echo"</fieldset >";
echo"</div>";
echo"<div id=\"contBodyR\">";
	echo"<fieldset  style=\"height:280px;\">";
		echo"<legend style=\"margin-left:8px;font-weight:bold;color:#395C71;\">Book Download</legend>";
		echo"<p style=\"margin-top:15px;margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">Networking</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">PHP Programming </a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">ASP Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">.Net Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">Jave Programming</a></span></p>";
		echo"<p style=\"margin-left:15px;\"><span class=\"hotspot\" ><img src=\"img/checkmark1.png\" /> <a href=\"user@book\">Hardware</a></span></p>";
	echo"</fieldset >";
echo"</div>";	
echo"</div>";		
echo"<div id=\"contBodyMain\" style=\"height:150px;width:100%;margin-top:20px;margin-left:auto;\" >";
	echo"<fieldset  style=\"width:98%;height:150px;margin-left:auto;margin-right:auto;border-left:#eee solid 1px;border-top:#eee solid 1px;border-right:transparent solid 1px;border-bottom:transparent solid 1px;\">";

	echo"</fieldset >";		
echo"</div>";
echo"</div>";
}else{
echo("<script>location.href = 'user@login';</script>");
}?>