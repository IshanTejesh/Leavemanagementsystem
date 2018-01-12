<html>
<?php
session_start();
?>
<?php
if($_SESSION['USERNAME']==session_id())
				{
				$a=$_SESSION['USER'];
				echo"<br>";
				echo"Welcome: <u> $a</u>";
				?>
				&nbsp;&nbsp;&nbsp;
				<a href="logout.php">Logout</a>
				&nbsp;&nbsp;&nbsp;
				<a href="user_login.php">Back</a>
			</div>
<br><br>
<?php
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where USERNAME='$a'";
 $rs=mysql_query($q);
 ?>
 <?php
echo "<table border='5' align='center'>";
echo "<tr>
		<th>UserName</th>
		<th>Leavepurpose</th>
        <th>Categorizes</th>
		<th>Leavedate</th>
		<th>Leavedatestart</th>
		<th>Leavedateend</th>
		<th>Engagedetails</th>
		<th>HodRemarks</th>
		<th>RegistrarRemarks</th>
		<th>Principal</th>
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
</center>
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
        <h3><center>Copyright ? 2016 Leave Management|| System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>   			 </div>
		</div>
	</div>
 </div>
</body>
</html>

 


