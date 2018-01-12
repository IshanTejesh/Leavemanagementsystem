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
			
		</div>
 
		<div class="col c8">
			<?php
		session_start();
				if($_SESSION['USERNAME']==session_id())
				{
				$b=$_SESSION['USER'];
				echo"<h2>Welcome: <u> $b</u>";
			?>
			&nbsp;&nbsp;&nbsp;
			<a href="logout.php">Logout</a></h2>
			<br><br>
			<form action="principal_user.php" method="post" enctype="multipart/form-data">
		<table border="5" height="50px" width="500px" align="center">
		<tr>
			<td align="center">
			<select name="t1" required>
			<option value="">Select</option>
<?php

mysql_connect('localhost','root','');
mysql_select_db('leaveproject');
$q="select * from leaveform where DEPARTMENT='CSE' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="CSE">CSE(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='MECH' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="MECH">MECH(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ETC' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ETC">ETC(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='IT' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="IT">IT(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='MEX' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="MEX">MEX(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='EEE' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="EEE">EEE(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='E&I' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="E&I">E&I(<?php echo $row ; ?>)
</option>
<?php
$q="select * from leaveform where DEPARTMENT='CIVIL' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="CIVIL">CIVIL(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.PHYSICS' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.PHYSICS">ENGG.PHYSICS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.CHEMISTRY' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.CHEMISTRY">ENGG.CHEMISTRY(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.MATHEMATICS' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.MATHEMATICS">ENGG.MATHEMATICS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='COMM.SKILLS' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="COMM.SKILLS">COMM.SKILLS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='TPO' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="TPO">TPO(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='PRCELL' and SREMARKS='RECOMENDED' and PSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="PRCELL">PRCELL(<?php echo $row ; ?>)</option>
            
            </select>
			</td>
			<td align="center"><input type="submit" value="Submit" id="button"></td>
			
			</tr>
			</table>
			</form>
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
        <h3><center>Copyright @ 2016 ||Leave Management System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>  			 </div></div>
	</div>
 </div>
</body>
</html> 