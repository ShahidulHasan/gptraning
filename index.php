<?php 
    include'class/shahidul.class.php';
    require_once('temp/header.php');
?>
<?php
    $cs=new Shahidul();
    $p=@$_GET['ref'];
    $cs->pageload($p);      
?>
<?php
    require_once ('temp/footer.php');
?>