<?php

 $a=$_REQUEST['k1'];
 $b=$_REQUEST['k2'];
 $c=$_REQUEST['k3'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="update leaveform set SREMARKS='$c',SSEEN='1',PAPPROVAL='',PREMARKS='',PSEEN='0' where USERNAME='$b' and fl_id='$a'";
 $rs=mysql_query($q);

 
?>