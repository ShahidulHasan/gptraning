<?php
require_once('class/shahidul.set.con.php'); 
$id=$_GET['id'];
$ext=$_GET['ext'];
$pdf=".pdf";

$query=mysql_query("select file_path, title from tbbook where id=$id ");
$bkinf=mysql_fetch_array($query);
$file=$bkinf['file_path'];
$title=$bkinf['title'];
if($ext==$pdf){
$burl="http://10.10.110.78/gptraning/".$bkinf['file_path'];
echo"<h2 style='margin:0px;font-size:20px;color:skyblue;text-align:center;'><img src=\"img/book.png\" />{$bkinf['title']}</h2>";

echo"<iframe src='http://docs.google.com/viewer?url={$burl}&embedded=true' width='100%' height='387' style='border: none;'></iframe>";
}
else{
echo"<h2 style='margin-left:20%;margin-bottom:10px;font-size:20px;color:skyblue;'>{$bkinf['title']}</h2>";
?>

<script type="text/javascript" src="js/flashembed.min.js"></script> 
<div id="spv1"></div>
<script>
window.onload = function() {  
flashembed("spv1", 
{
src:'player/FlowPlayerDark.swf',
	width: 500, 
	height: 360,
	loop: false
},
{
config:
 {   
	videoFile: '<?php echo"$file";?>',
	autoPlay: false,
	splashImageFile: 'movie.jpg',
	autoBuffering: true,
	initialScale: 'orig',
	showFullScreenButton: false, 
	controlBarGloss:'high',
	controlBarBackgroundColor:'0x567890',
	menuItems: [ 1, 1, 1, 1, 1, 1, 0 ] 
			
 }} 
   );
}
</script>

<div id="spv2"></div>
<script>
window.onload = function() {  
flashembed("spv2", 
{
src:'player/FlowPlayerDark.swf',
	width: 500, 
	height: 360,
	loop: false
},
{
config:
 {   
	videoFile: '<?php echo"$file";?>',
	autoPlay: false,
	splashImageFile: 'movie.jpg',
	autoBuffering: true,
	initialScale: 'orig',
	showFullScreenButton: false, 
	controlBarGloss:'high',
	controlBarBackgroundColor:'0x567890',
	menuItems: [ 1, 1, 1, 1, 1, 1, 0 ] 
			
 }} 
   );
}
</script>
<?php } ?>