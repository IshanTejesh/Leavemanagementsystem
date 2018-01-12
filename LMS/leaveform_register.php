<?php
session_start();
?>
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
			<h1><a href="index.php">|| Leave Managment System</a></h1>
		</div>
		
		<div class="col c7 aligncenter">
			<p class="slogan">|| Leave Managment System</p>
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
			<?php
				if($_SESSION['USERNAME']==session_id())
				{
				$b=$_SESSION['USER'];
				echo"Welcome: <u> $b</u>";
				?>
				&nbsp;&nbsp;<a href='logout.php'>Logout</a></td>
			
		</div>
 
		<div class="col c8">
		<?php
$a=$_REQUEST['t1'];
$c=$_REQUEST['t3'];
$d=$_REQUEST['t4'];
$e=$_REQUEST['t5'];
$f=$_REQUEST['t6'];
$h=$_REQUEST['t8'];
$i=$_REQUEST['t9'];
$j=$_REQUEST['t10'];
$k=$_REQUEST['t11'];
$l=$_REQUEST['t12'];
$n=$_REQUEST['t14'];

mysql_connect('localhost','root','');
mysql_select_db('leaveproject');
$q="insert into leaveform values('','$a','$c','$d','$e','$f','$h','$i','$j','$k','$l','$n','','','','','','','','')";
$rs=mysql_query($q);

$r="insert into leave1 values('','$a','$f','$h','$k')";
$qs=mysql_query($r);

/*$t="select * from registration where USERNAME='$a'";
$ts=mysql_query($t);
$row=mysql_fetch_array($ts);
$x=$row["$f"];
if($x>$k)
{
 $x=$x-$k;
}
$y="update registration set $f='$x'  where USERNAME='$a'";
$ys=mysql_query($y);
*/

$af_row=mysql_affected_rows();
?>
<h1>Request Succesfully </h1>
<h2>Wait For Approvel </h2>
<center><a href="user_login.php">Back</a></center>
<?php
echo $af_row;
}
				else
				{
				header("location:index.php");
				}
				?>
<br>   
</p>
		</div>
 
		<div class="col c2">
					</div>
	</div>
<div id="footer" class="row">
		<div class="col c12 aligncenter">
			<br><br><br><br><br><br>
        <h3><center>Copyright � 2016 Leave Management|| System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>




