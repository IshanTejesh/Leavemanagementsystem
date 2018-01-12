<?php
    session_start();
	$a=$_POST['x'];
	$b=$_POST['y'];
	mysql_connect('localhost','root','');
	mysql_select_db('leaveproject');
	$q="select * from registration where USERNAME='$a' and PASSWORD='$b'";
	$rs=mysql_query($q);
	if($row=mysql_fetch_row($rs))
	{
		$_SESSION['USERNAME']=session_id();
		$_SESSION['USER']=$a;
		echo"<script>
			alert('Welcome User');
			window.location='user_login.php';
			</script>
		";
	}
	else
	{
		echo"<script>
			alert('Invalid user');
			window.location='login.php';
			</script>
		";
	}
?>