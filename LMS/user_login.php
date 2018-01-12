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
				<?php
				echo"<a href='logout.php'>Logout</a></h2>"
			?>
			<br><br>
		<table border="5" height="50px" width="500px" align="left">
		<tr>
			<td align="center"><a href='myprofile.php'>My Profile</a></td>
			<td align="center"><a href='leaveform.php'>Leave Request</a></td>
				<td align="center"><a href='status.php'>Status</a></td>
			
			</tr>
			</table>
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
        <h3><center>Copyright ? 2016 Leave Management|| System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>
