<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="origo.css" title="Origo" media="all" />
	<title>|| Registration Successfull</title>
</head>

<body class="light blue smaller freestyle01">
<div id="layout">
 
	<div class="row smaller">
		<div class="col c5 smaller">
			<h1><a href="index.php">|| Leave Managment Software</a></h1>
		</div>
		
		<div class="col c7 aligncenter">
			<p class="slogan">|| Leave Managment Software</p>
		</div>
	</div>
  
	<div class="row">
		<div class="col c12 aligncenter">
			<img src="images/front.jpg" width="960" height="240" alt="" />
		</div>
	</div>
 
	<div class="row">
		<div class="col c2 alignleft">
			<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login In</a></li>
			
		</div>
 
		<div class="col c8">
			<?php

$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];
$d=$_REQUEST['t4'];
$e=$_REQUEST['t5'];
$f=$_REQUEST['t6'];
$g=$_REQUEST['t7'];
$h=$_REQUEST['t8'];
$i=$_REQUEST['t9'];
$j=$_REQUEST['t10'];
$k=$_REQUEST['t11'];
$t=$_REQUEST['t12'];
$m='10';
$n='12';
$o='30';
$p='2';
$q='20';
mysql_connect('localhost','root','');
mysql_select_db('leaveproject');
if($t=="TEACHING")
{
$q="insert into registration values('','$a','$b','$c','$d','$e','$f','$g','$h','$t','$i','$j','$k','$m','$n','$o','$p','$q')";
$rs=mysql_query($q);
}
else
{
$q="insert into registration values('','$a','$b','$c','$d','$e','$f','$g','$h','$t','$i','$j','$k','$m','$n','$o','$p','')";
$rs=mysql_query($q);
}
?>
<h1>Register Succesfully </h1>
<center><img src="images/d.jpg" width="160px" height="100px">
<meta http-equiv="refresh" content="4; url=index.php">
<br> 
<br>   
</p>
		</div>
 
		<div class="col c2">
					</div>
	</div>
 
	<div id="footer" class="row">
		<div class="col c12 aligncenter">
			<br><br><br><br><br><br>
        <h3><center>Copyright � 2016 Leave Management|| Software</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>
