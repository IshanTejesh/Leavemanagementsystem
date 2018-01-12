<?php

 $a=$_REQUEST['k3'];
 $c=$_REQUEST['k2'];
 $e=$_REQUEST['k5'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="update leaveform set SREMARKS='$c',SSEEN='1' where USERNAME='$a' and fl_id='$e'";
 $rs=mysql_query($q);
 
 if(strtolower($c)=="recomended")
 {
  $v="select * from leaveform where USERNAME='$a' and fl_id='$e'";
  $vs=mysql_query($v);
  $row = mysql_fetch_array($vs);
  $f=$row["CATEGORIZES"];
  $k=$row["NOOFDAYS"];
 
  
 

 
 
  $t="select * from registration where USERNAME='$a'";
  $ts=mysql_query($t);
  $row=mysql_fetch_array($ts);
  $x=$row["$f"];
  if($x>$k)
  {
  $x=$x-$k;
  }
  $y="update registration set $f='$x'  where USERNAME='$a'";
  $ys=mysql_query($y);
 }
?>