<?php
session_start();
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="origo.css" title="Origo" media="all" />
	<title>|| Leave Managment System</title>
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
				$a=$_SESSION['USER'];
				echo"Welcome: <u> $a</u>";
				?>
				<a href='logout.php'>Logout</a>&nbsp;&nbsp;&nbsp;
				<a href="user_login.php">Back</a>
			</div>
 
		<div class="col c8">
			<h2>MY PROFILES:</h2>
<br><br><br>
			
			

<?php
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from registration where USERNAME='$a'";
 $rs=mysql_query($q);
?>
 
<?php
echo"<table border='3' style='float:left;'>"; 
 while($row=mysql_fetch_array($rs))
 {
  echo"<tr><td>First</td><td>$row[FIRST]</td></tr>";
  echo"<tr><td>Last</td><td>$row[LAST]</td></tr>";
  echo"<tr><td>Username</td><td>$row[USERNAME]</td></tr>";
  echo"<tr><td>Password</td><td>$row[PASSWORD]</td></tr>";
  echo"<tr><td>Gender</td><td>$row[GENDER]</td></tr>";
  echo"<tr><td>College</td><td>$row[COLLEGE]</td></tr>";
  echo"<tr><td>Department</td><td>$row[DEPARTMENT]</td></tr>";
  echo"<tr><td>Designation</td><td>$row[DESIGNATION]</td></tr>";
  echo"<tr><td>DOJ</td><td>$row[DOJ]</td></tr>";
  echo"<tr><td>Mobileno</td><td>$row[MOBILENO]</td></tr>";
  echo"<tr><td>Address</td><td>$row[ADDRESS]</td></tr>";
 
 
 }
echo"</table>"; 
?>

<?php
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from registration where USERNAME='$a'";
 $rs=mysql_query($q);
?>
 
<?php
echo"<table border='3' style='float:right;' cellpadding='3'>"; 
 while($row=mysql_fetch_array($rs))
 {
  echo"<tr><td colspan='2'>Leaves</td></tr>";
  echo"<tr><td>CL</td><td>$row[CL]</td></tr>";
  echo"<tr><td>EL</td><td>$row[EL]</td></tr>";
  echo"<tr><td>SL</td><td>$row[SL]</td></tr>";
  echo"<tr><td>OL</td><td>$row[OL]</td></tr>";
  echo"<tr><td>DL</td><td>$row[DL]</td></tr>";
  }
echo"</table>"; 
?>


			</div>
 <?php
				}
				else
				{
				header("location:index.php");
				}
				?>
            
		<div class="col c2">
					</div>
	</div>
 
	<div id="footer" class="row">
		<div class="col c12 aligncenter">
			<br><br><br><br><br><br>
        <h3><center>Copyright ? 2016 Leave Management|| System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>
