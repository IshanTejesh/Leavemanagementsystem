<?php

 $uname=$_REQUEST['a1'];
 $cl=$_REQUEST['a2'];
 $el=$_REQUEST['a3'];
 $sl=$_REQUEST['a4'];
 $ol=$_REQUEST['a5'];
 $dl=$_REQUEST['a6'];

 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $u="select * from registration where USERNAME='$uname'";
 $us=mysql_query($u);
 $row=mysql_fetch_array($us);
 $a=$row["CL"];

 $v="select * from registration where USERNAME='$uname'";
 $vs=mysql_query($v);
 $row=mysql_fetch_array($vs);
 $b=$row["EL"];
 $c=$row["SL"];
 $d=$row["OL"];
 $e=$row["DL"];
 
 
 $cl=$cl+$a;
 $el=$el+$b;
 $sl=$sl+$c;
 $ol=$ol+$d;
 $dl=$dl+$e;
 
 $z="update registration set CL='$cl',EL='$el',SL='$sl',OL='$ol',DL='$dl'  where USERNAME='$uname'";
 $zs=mysql_query($z);
 
?>