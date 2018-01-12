<?php
	echo "Logged out successfully";
	?>
	<a href="index.php">Click Here...</a>
	<meta http-equiv="refresh" content="2; url=index.php">

	<?php
    session_start();
	session_destroy();
?>
