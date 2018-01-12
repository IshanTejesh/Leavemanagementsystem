<?php
    session_start();
	$a=$_REQUEST['t2'];
    $b=$_REQUEST['t3'];
    mysql_connect('localhost','root','');
    mysql_select_db('leaveproject');
    $q="select * from principle where USERNAME='$a' and PASSWORD='$b'";
    $rs=mysql_query($q);
	if($row=mysql_fetch_row($rs))
	{
		$_SESSION['USERNAME']=session_id();
		$_SESSION['USER']=$a;
		echo"<script>
			alert('Welcome Principal');
			window.location='principal_login.php';
			</script>
		";
	}
	else
	{
		echo"<script>
			alert('Invalid user');
			window.location='login_principle.php';
			</script>
		";
	}
?>