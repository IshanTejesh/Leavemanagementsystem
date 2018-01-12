<?php
 session_start();
				if($_SESSION['USERNAME']==session_id())
				{
				$b=$_SESSION['USER'];
				echo"<h2>Welcome: <u> $b</u>";
			?>
			&nbsp;&nbsp;
			<a href='logout.php'>Logout</a>
			&nbsp;&nbsp;
			<a href='superadminreject.php'>Back</a></h2>
			
			<br><br>
<?php		
 $b=$_REQUEST['t1'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where DEPARTMENT='$b' and HREMARKS='NOTRECOMENDED'";
 $rs=mysql_query($q); 
 ?>
 <center>
<?php
echo "<table border='5'>";
echo "<tr>
		<th>UserName</th>
		<th>Department</th>
		<th>Designation</th>
		<th>Leavepurpose</th>
        <th>Categorizes</th>
		<th>Leavedate</th>
		<th>Leavedatestart</th>
		<th>Leavedateend</th>
		<th>Engagedetails</th>
		<th>HodRemarks</th>
		<th>Hoddate</th>
		</tr>";
		
while($row=mysql_fetch_array($rs))
{    
   	echo "<tr><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['USERNAME']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DEPARTMENT']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DESIGNATION']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEPURPOSE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['CATEGORIZES']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATESTART']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATEEND']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['ENGAGEDETAILS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td>";
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