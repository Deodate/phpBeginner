<?php
	include '../mysql/lesson07.php';
	function insert(){
		$query= mysql_query("INSERT INTO  user VALUES('','richard','@123','2')")or die(mysql_error());
	}
	insert();//call our defined function to isnert data in database 
	/* remember that i can only insert if i included lesson07.php because it is the one
		having database to insert our data.
	*/
?>