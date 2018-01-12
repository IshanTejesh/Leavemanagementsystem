<html>
<body>
<script src="jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
$('body').on('click','.submit1',function(data){
var remarks=$(this).closest('tr').find('.z').val();
var hdate=$(this).closest('tr').find('.d').val();
var fid=$(this).closest('tr').find('.fl_id').val();
var name=$(this).closest('tr').find('td:nth-child(1)').text().trim();

$.post('hod_approval.php',{k2:remarks,k3:name,k4:hdate,k5:fid},function(data){

$('body').append(data);
location.reload();
});





});
});
</script>
	<?php
		session_start();
				if($_SESSION['USERNAME']==session_id())
				{
				$a=$_SESSION['USER'];
				$b=$_SESSION['DEPARTMENT'];
				echo"<h2>Welcome: <u> $a</u>";
				?>				
				&nbsp;&nbsp;&nbsp;
				<?php
				echo"<a href='logout.php'>Logout</a></h2>"
			?>
		
<?php
$accept="accept";
$reject="reject";
 mysql_connect('localhost','root','');
 mysql_select_db('leaveproject');
 $q="select * from leaveform where DEPARTMENT='$b' and HSEEN='0'";
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
		<th>Submit</th> 
		</tr>";
		
while($row = mysql_fetch_array($rs))
{   echo"<input type=hidden value='$row[USERNAME]' id=name>";
    
   	echo "<tr><td>"; echo"<input type=hidden value='$row[fl_id]' class=fl_id>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['USERNAME']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DEPARTMENT']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['DESIGNATION']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEPURPOSE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['CATEGORIZES']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATE']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";
	 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATESTART']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['LEAVEDATEEND']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['ENGAGEDETAILS']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<select name='y' class='z' >
	<option>Select</option>
    <option value='$row[HREMARKS]' selected='selected' >$row[HREMARKS]</option>
	<option value='RECOMENDED'>RECOMENDED</option>
	<option value='NOTRECOMENDED'>NOTRECOMENDED</option>
    </select>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>"; 
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' name='a' value='$row[HDATE]' class='d' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td><td>";  
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Forward' class='submit1' id='sub1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 	echo "</td>";  
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
           
</body>
</html>