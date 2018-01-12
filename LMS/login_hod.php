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
			<h1><a href="index.html">||Leave Managment System</a></h1>
		</div>
		
		<div class="col c7 aligncenter">
			<p class="slogan">||Leave Managment System</p>
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
			<li><a href="registration.html">Register</a></li>
			<li><a href="login_hod.php">HOD Admin</a></li>
			<li><a href="login_superadmin.php">Registrar</a></li>
			<li><a href="login_principle.php">Principal Admin</a></li>
			<li><a href="contactus.php">Contact Us</a>
			<li><a href="aboutus.php">About Us</a>
				
		</div> 
		<div class="col c8">
			<h2><center><ul>Head Of Department Login</ul></center></h2>
			<form action="hod_chk.php" method="post" enctype="multipart/form-data">
			<table border="1" align="center" width="40%" height="30%" >
			<tr><td align="center"><b>DEPARTMENT:</b></td> 
<td align="center"><select name="t1" id="c1" required>
<option value="">select</option>
<?php

mysql_connect('localhost','root','');
mysql_select_db('leaveproject');
$q="select * from leaveform where DEPARTMENT='CSE' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="CSE">CSE(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='MECH' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="MECH">MECH(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ETC' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ETC">ETC(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='IT' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="IT">IT(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='MEX' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="MEX">MEX(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='EEE' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="EEE">EEE(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='E&I' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="E&I">E&I(<?php echo $row ; ?>)
</option>
<?php
$q="select * from leaveform where DEPARTMENT='CIVIL' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="CIVIL">CIVIL(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.PHYSICS' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.PHYSICS">ENGG.PHYSICS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.CHEMISTRY' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.CHEMISTRY">ENGG.CHEMISTRY(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='ENGG.MATHEMATICS' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="ENGG.MATHEMATICS">ENGG.MATHEMATICS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='COMM.SKILLS' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="COMM.SKILLS">COMM.SKILLS(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='TPO' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="TPO">TPO(<?php echo $row ; ?>)</option>
<?php
$q="select * from leaveform where DEPARTMENT='PRCELL' and HSEEN='0'";
$rs=mysql_query($q); 
$row=mysql_num_rows($rs);
?>
<option value="PRCELL">PRCELL(<?php echo $row ; ?>)</option>
</select>
</td></tr>
<tr><td align="center"><b>Username:</b></td> <td align="center"><input type="text" name="t2" value=""  size="50" class="input"/required></td></tr>
<tr><td align="center"><b>Password:</b></td> <td align="center"><input type="password" name="t3" value=""  size="50" class="input"/required></td></tr>
 <tr><td></td><td align="center"><input type="submit" value="Login" id="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="clear" id="button"></td>
 
  </tr>
  </table>
  </form>
  <p id="p1" style="position:fixed;top:80px;left:1500px;height:600px;width:400px;></p>
       </div>
		</div>
 
		<div class="col c2">
					</div>
	</div>
 
	<div id="footer" class="row">
		<div class="col c12 aligncenter">
			<br><br><br><br><br><br>
       <h3><center>Copyright � 2016 Leave Management|| Software</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div></div>
	</div>
 </div>
</body>
</html>
