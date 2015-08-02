<?php
	include '../mysql/lesson07.php';
	function delete($id){
		$query=mysql_query("DELETE FROM user WHERE id=".$id)or die(mysql_error());//with where we pass table column to delete
	}
	delete('3'); //here we are passing id to delete note that it is id because is the one we selected in where clause;
?>