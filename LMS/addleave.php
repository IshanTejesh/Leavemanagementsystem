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
			<h1><a href="index.html">|| Leave Managment System</a></h1>
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
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='logout.php'>Logout</a>
			&nbsp;&nbsp;
			<a href='superadmin_login.php'>Back</a></h2>
			<br><br>
			<form action="addleaveto.php" method="post" enctype="multipart/form-data">
		<table border="5" height="50px" width="500px" align="center">
		<tr>
			<td align="center">
			<select name="t1" required>
			 <option value="">Select</option>
            <option value="CSE">CSE</option>
            <option value="MECH">MECH</option>
            <option value="ETC">ETC</option>
            <option value="IT">IT</option>
            <option value="MEX">MEX</option>
            <option value="EEE">EEE</option>
            <option value="E&I">E&I</option>
            <option value="CIVIL">CIVIL</option> 
            <option value="ENGG.PHYSICS">ENGG.PHYSICS</option>
            <option value="ENGG.CHEMISTRY">ENGG.CHEMISTRY</option>
            <option value="ENGG.MATHEMATICS">ENGG.MATHEMATICS</option>
            <option value="COMM.SKILLS">COMM.SKILLS</option> 
            <option value="TPO">TPO</option>
            <option value="PRCELL">PRCELL</option>
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
        <h3><center>Copyright @ 2016 Leave Management|| Software</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>
