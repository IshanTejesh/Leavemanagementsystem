<?php
 $a=$_REQUEST['k3'];
 $c=$_REQUEST['k2'];
 $d= $_REQUEST['k4'];
 $e=$_REQUEST['k5'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="update leaveform set HREMARKS='$c',HDATE='$d',HSEEN='1' where USERNAME='$a' and fl_id='$e'";
 $rs=mysql_query($q);
?>