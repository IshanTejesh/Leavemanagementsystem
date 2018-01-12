<?php

 $a=$_REQUEST['k3'];
 $b=$_REQUEST['k1'];
 $c=$_REQUEST['k2'];
 $e=$_REQUEST['k5'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="update leaveform set PAPPROVAL='$b',PREMARKS='$c',PSEEN='1' where USERNAME='$a' and fl_id='$e'";
 $rs=mysql_query($q);

 
?>