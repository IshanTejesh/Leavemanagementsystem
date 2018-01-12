<?php
    session_start();
	$a=$_POST['x'];
	$b=$_POST['y'];
	mysql_connect('localhost','root','');
	mysql_select_db('leaveproject');
	$q="select * from admin where USERNAME='$a' and PASSWORD='$b'";
	$rs=mysql_query($q);
	if($row=mysql_fetch_row($rs))
	{
		$_SESSION['USERNAME']=session_id();
		$_SESSION['USER']=$a;
		echo"<script>
			alert('Welcome SuperAdmin');
			window.location='superadmin_login.php';
			</script>
		";
	}
	else
	{
		echo"<script>
			alert('Invalid user');
			window.location='login_superadmin.php';
			</script>
		";
	}
?>