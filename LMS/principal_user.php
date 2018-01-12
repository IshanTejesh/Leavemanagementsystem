<html>
<body>
<script src="jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){

$('body').on('click','.submit1',function(data){
var appr=$(this).closest('tr').find('.y').val();
var remarks=$(this).closest('tr').find('.z').val();
var name=$(this).closest('tr').find('td:nth-child(1)').text().trim();
var fid=$(this).closest('tr').find('.fl_id').val();
$.post('principal_approval.php',{k1:appr,k2:remarks,k3:name,k5:fid},function(data){
//alert(data);
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
				echo"<h2>Welcome: <u> $b</u>";
			?>
			&nbsp;&nbsp;
			<a href="logout.php">Logout</a>
			&nbsp;&nbsp;
			<a href="principal_login.php">Back</a></h2>
			<br><br>
		<?php
 $b=$_REQUEST['t1'];
 $a="accept";
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where DEPARTMENT='$b' and SREMARKS='RECOMENDED' and HREMARKS='RECOMENDED' and PSEEN='0'";
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
		<th>Leavedatestart</th>
		<th>Leavedateend</th>
		<th>HodRemarks</th>
		<th>Hoddate</th>
		<th>Registrar</th>
		<th>PrincipalAccept/PrincipalReject</th>
		<th>PrincipalRemarks</th>
		<th>Submit</th> 
		</tr>";
		
while($row = mysql_fetch_array($rs))
{    
   	echo "<tr><td>";echo"<input type=hidden value='$row[fl_id]' class=fl_id>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['USERNAME']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DEPARTMENT']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DESIGNATION']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEPURPOSE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['CATEGORIZES']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATESTART']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATEEND']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['HDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['SREMARKS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	
    echo"<select class='y' name='y' value='ACCEPT' >
	     <option>Select</option>
	     <option value='$row[PAPPROVAL]' selected='selected'>$row[PAPPROVAL]</option>
		 <option value='ACCEPT'>ACCEPT</option>
		 <option value='REJECT'>REJECT</option>
	     <select>
	";

	
	echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='y' value='$row[PREMARKS]' class='z' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Submit' class='submit1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td>";  
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
        <h2><center>Copyright @ 2016 || Leave Managemen System</center></h2>
        <h3><center>Made By:Tejesh</center></h3>   			 </div></div>
	</div>
 </div>
</body>
</html>
            


 
 
 
 
