<html>
<body>
<script src="jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){

$('body').on('click','.submit1',function(data){
var remarks=$(this).closest('tr').find('.z').val();
var name=$(this).closest('tr').find('td:nth-child(1)').text().trim();
var fid=$(this).closest('tr').find('.fl_id').val();
$.post('superadmin_approval.php',{k2:remarks,k3:name,k5:fid},function(data){

$('body').append(data);
location.reload();
});

});

$('body').on('click','.submit2',function(data){
var sremarks=$(this).closest('tr').find('.z').val();
var name=$(this).closest('tr').find('td:nth-child(1)').text().trim();
var fid=$(this).closest('tr').find('.fl_id').val();
$.post('superadmin_approvall.php',{k1:fid,k2:name,k3:sremarks},function(data){

$('body').append(data);
location.reload();
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
 $q="select * from leaveform where DEPARTMENT='$b' and HREMARKS='RECOMENDED' and SSEEN='0'";
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
		<th>Registrar</th>
		<th>Submit</th> 
		</tr>";
		$m=1;
while($row = mysql_fetch_array($rs))
{    
   	echo "<tr><td>";echo"<input type=hidden value='$row[fl_id]' class=fl_id>"; 
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
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name='y' class='z' >
	<option>Select</option>
    <option value='$row[SREMARKS]' selected='selected'>$row[SREMARKS]</option>
	<option value='RECOMENDED'>RECOMENDED</option>
	<option value='NOTRECOMENDED'>NOTRECOMENDED</option>
    </select>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";   
	  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Submit' class='submit1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td>";  
echo "</tr>"; 
} 
echo"</font>";
echo "</table>";
?>
</center>
<br><br><br><br>
<?php		
 $b=$_REQUEST['t1'];
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where DEPARTMENT='$b' and SREMARKS='RECOMENDED' and PAPPROVAL='REJECT'";
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
		<th>Registrar</th>
		<th>PrincipalAccept/PrincipalReject</th>
		<th>PrincipalRemarks</th>
		<th>Submit</th> 
		</tr>";
		$m=1;
while($row = mysql_fetch_array($rs))
{    
   	echo "<tr><td>";echo"<input type=hidden value='$row[fl_id]' class=fl_id>"; 
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
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name='y' class='z' >
	<option>Select</option>
    <option value='$row[SREMARKS]' selected='selected'>$row[SREMARKS]</option>
	<option value='RECOMENDED'>RECOMENDED</option>
	<option value='NOTRECOMENDED'>NOTRECOMENDED</option>
    </select>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['PAPPROVAL']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['PREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";

	  
	  
	  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Submit' class='submit2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td>";  
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
        <h3><center>Copyright  @ 2016 ||Leave Management System</center></h3>
        <h5><center>Made By:Tejesh</center></h5>  			 </div></div>
	</div>
 </div>
</body>
</html> 