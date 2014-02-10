<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*
include('shahidul.con.php');
include('connection.class.php');

$db=new ShahidulCon();                             //      Create object for ShahidulCon class
$connect=$db->db($dbase['host'],$dbase['username'],$dbase['password'],$dbase['database']);
*/

/*
$link=mysql_connect('mysql.2freehosting.com','u706097656_root','1011153618');
mysql_select_db('u706097656_gpit',$link);
*/

$link=mysql_connect('localhost','root','commonrbs');
mysql_select_db('gpit_training',$link);
?>
