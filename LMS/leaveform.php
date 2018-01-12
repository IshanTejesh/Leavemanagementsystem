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
				$b=$_SESSION['USER'];
				echo"Welcome: <u> $b</u>";
				?>
				&nbsp;&nbsp;<a href='logout.php'>Logout</a>&nbsp;&nbsp;&nbsp;<a href="user_login.php">Back</a>
			
			
			</div>
 
		<div class="col c8">
		
		
		<form name="form1" action="leaveform_register.php" method="post">			

			<h2><center>|| Leave Format Request ||</center></h2>
<table style="float:left;">
<tr>
<td>UserName</td>
<td><input type="text" name="t1" value="<?php echo"$b" ?>" required>
</td>
<br>
</tr>
<?php
/*mysql_connect('localhost','root','');
mysql_select_db('leaveproject');
$q="select * from registration where USERNAME='$b'";
$rs=mysql_query($q);
$row=mysql_fetch_array($rs);
$d=$row['DEPARTMENT'];
$t="select * from hod where DEPARTMENT='$d'";
$rs=mysql_query($t);
$row=mysql_fetch_array($rs);
echo"<input type=hidden value='$row[USERNAME]' name=t2>";
 /*mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from hod where DEPARTMENT='CSE'";
 $rs=mysql_query($q);
  
 while($row=mysql_fetch_array($rs))
 {
  
  echo"<input type=hidden value='$row[USERNAME]' name=t2>";
   }*/
 ?>
<?php
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from registration where USERNAME='$b'";
 $rs=mysql_query($q);
  while($row=mysql_fetch_array($rs))
 {
  echo"<input type=hidden value='$row[DEPARTMENT]' name=t3>";
  echo"<input type=hidden value='$row[DESIGNATION]' name=t4>";
 }
 ?>
<tr><td>
Leave purpose</td>
<td>
<textarea name="t5" required>
</textarea>
</td></tr>
<tr><td>
Categorizes of leaves</td>
<td>
<input type="radio" name="t6" name="CL" value="CL">CL
<input type="radio" name="t6" value="EL">EL
<input type="radio" name="t6" value="SL">SL
<input type="radio" name="t6" value="OL">OL
<input type="radio" name="t6" value="DL">DL

</td></tr>
<tr><td>
Date of Leave</td>
<td>
<input type="date" name="t8" required><br></td></tr>
<tr><td>
Leave date start</td>
<td>
<input type="date" name="t9" required><br></td></tr>
<tr><td>
Leave date end</td><td>
<input type="date" name="t10" required></td></tr>
<tr><td>
No.of Days</td>
<td>
<select name="t11" required>
<option>Select</option>
<option value="0.5">1/2</option>
<?php
for($i=1;$i<=100;$i++)
echo"<option value='$i'>$i</option>";
?>
</select>
</td></tr>
<tr><td>
Engage details</td>
<td>
<select name="t12" required>
<option>SELECT</option>
<option value="YES">YES</option>
<option value="NO">NO</option>
</select></td></tr>

<tr><td>
Phone No.</td>
<td><input type="text" name="t14" required>
</td></tr>
<tr>
<td align="center"><input type="submit" value="Submit" ></td>
<td><input type="reset" value="Clear" ></td>
</tr>
</table>
</form>
<?php
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from registration where USERNAME='$b'";
 $rs=mysql_query($q);
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


<?php
				}
				else
				{
				header("location:index.php");
				}
				?>
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
