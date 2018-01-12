<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="origo.css" title="Origo" media="all" />
	<title>|| Leave Managment System</title>
</head>

<body class="light blue smaller freestyle01">

<script src="jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){

$('#button').click(function(){
var x=$('#c1').val();
var y=$('#i1').val();
var z=$('#i2').val();
var v=$('#i3').val();
var w=$('#i4').val();
var u=$('#i5').val();
$.post('updateleave.php',{a1:x,a2:y,a3:z,a4:v,a5:w,a6:u,},function(data){
location.reload();
});
});
});
</script>


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
		
             
			<table align="center">
		    <tr>		
		    <td>Name</td>
            <td>
		    <?php
			$b=$_REQUEST['t1'];
            mysql_connect('localhost','root','');
            mysql_select_db('leaveproject');
            $q="select * from registration where DEPARTMENT='$b'";
            $rs=mysql_query($q);
            
            echo "<select class='st1' id='c1' name='st4'>";
			echo "<option>Select</option>";
            while($row=mysql_fetch_array($rs))
            {
             echo "<option value='$row[USERNAME]'>$row[USERNAME]</option>";
            }
            echo"</select>";
            ?>
			</td></tr>
            <tr><td>CL</td><td><input type="text" id="i1" /></td></tr>
			<tr><td>EL</td><td><input type="text" id="i2" /></td></tr>
			<tr><td>SL</td><td><input type="text" id="i3" /></td></tr>
			<tr><td>OL</td><td><input type="text" id="i4" /></td></tr>
			<tr><td>DL</td><td><input type="text" id="i5" /></td></tr>
			<tr>
			<td align="center"colspan="2"><input type="button" value="Submit" id="button"></td>
			
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
        <h3><center>Copyright @ 2016 Leave Management|| Software</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>
