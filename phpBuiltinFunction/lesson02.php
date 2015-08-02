<?php
	/*In this lesson we are going to see php functions a functions is collection of codes
		that solve a specific problem for example if i have a string and i want to count
		words contain in it, i can use php function called strlen() let see examples
	*/
	include ('lesson01.php'); //this is a php function to include some code that is in some file into where we actually are, it is like we are copying those code to our current document
	//to chech to see if we have the above included code let print Instructor name down here
	print $projectInstructor; //we use another function called print to show something on screen
	//make sure that your xamp server is on or if you are using linux make sure that apache is running and folder is having all full permission
	//with that in place go in your browser and type: localhost/phpBeginner/lesson02.php
	//i assumed that you have put your code into htdocs
	//put exit() function anywhere to see a single code what is doint
	print strlen($projectInstructor);// this function is for showing string lenght
	if (is_numeric($projectCtredits)) {
		# code...
		print "it is a number";
	}else{

	}
	
	if(is_null($projectInstructor)){
		print "is null";
	}else{
		print "is not null";
	}
	

?>