<?php
    session_start();
	$a=$_REQUEST['t2'];
	$b=$_REQUEST['t3'];
	$c=$_REQUEST['t1'];
mysql_connect('localhost','root','');
	mysql_select_db('leaveproject');
	$q="select * from hod where DEPARTMENT='$c' && USERNAME='$a' && PASSWORD='$b'";
	$rs=mysql_query($q);
	if($row=mysql_fetch_row($rs))
	{
		$_SESSION['USERNAME']=session_id();
		$_SESSION['USER']=$a;
		$_SESSION['DEPARTMENT']=$b;
		echo"<script>
			alert('Welcome HOD');
			window.location='hod_user.php';
			</script>
		";
	}
	else
	{
		echo"<script>
			alert('Invalid user');
			window.location='login_hod.php';
			</script>
		";
	}
?>