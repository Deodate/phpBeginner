<?php
	/* connect to database   */
	$username="root";
	$password="";
	$machine="127.0.0.1";
	$database="student";
	mysql_connect($machine,$username,$password) or die(mysql_error()) ;//here we are connection to mysql server or if we fail we show error on die function
	mysql_select_db($database) or die(mysql_error());
?>