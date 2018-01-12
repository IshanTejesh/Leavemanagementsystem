<html>
<body>
<script src="jquery-1.9.1.js"></script>
<script src="tableExport.js"></script>
<script src="jquery.base64.js"></script>
<script src="html2canvas.js"></script>
<script src="jspdf.js"></script>
<script src="base64.js"></script>
<script src="sprintf.js"></script>

<script>
$(document).ready(function(){

$('#excel').click(function(){

$('#my').tableExport({
  type:'excel',
  escape:'false',
  
  });

});

});
</script>
</body>
</html>
<?php
				session_start();
				if($_SESSION['USERNAME']==session_id())
				{
				$b=$_SESSION['USER'];
				echo"<br>";
				echo"<h2>Welcome: <u> $b</u>";
				?>
				&nbsp;&nbsp;
				<a href='logout.php'>Logout</a>
				&nbsp;&nbsp;
				<a href='superadminaccept.php'>Back</a></h2>
				<br>
<?php		
 $b=$_REQUEST['t1'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where DEPARTMENT='$b'";
 $rs=mysql_query($q); 
 ?>
 <center>
<?php
echo "<table border='5' align='center' id='my'>";
echo "<tr>
		<td><h3>UserName</h3></td>
		<td><h3>Leavepurpose</h3></td>
        <td><h3>Categorizes</h3></td>
		<td><h3>Leavedate</h3></td>
		<td><h3>Leavedatestart</h3></td>
		<td><h3>Leavedateend</h3></td>
		<td><h3>Engagedetails</h3></td>
		<td><h3>HodRemarks</h3></td>
		<td><h3>RegistrarRemarks</h3></td>
		<td><h3>Principal</h3></td>
		</tr>";
while($row =mysql_fetch_array($rs))
{    
   	echo "<tr><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['USERNAME']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "</td><td>";  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEPURPOSE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['CATEGORIZES']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATESTART']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATEEND'].
"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td><td>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['ENGAGEDETAILS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
		
		if($row['HREMARKS']=='')
		{
		$row['HREMARKS']='PENDING';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td><td>"; 
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td><td>"; 
		}
		if($row['SREMARKS']=='')
		{
		$row['SREMARKS']='PENDING';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['SREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td><td>"; 
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['SREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td><td>"; 
		}
		if($row['PAPPROVAL']=='')
		{
		$row['PAPPROVAL']='PENDING';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['PAPPROVAL']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td>"; 
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['PAPPROVAL']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  echo "</td>";
		}
		echo "</tr>"; 
} 
echo"</font>";
echo "</table>";
?>
</center><br />
<center><button id="excel">Export</button></center><br />

		<?php
				}
				else
				{
				header("location:index.php");
				}
				?>
  <div id="footer" class="row">
		<div class="col c12 aligncenter">
			<br><br><br><br><br><br>
        <h3><center>Copyright  @ 2016 ||Leave Management System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>  			 </div></div>
	</div>
 </div>
</body>
</html> 