<?php


spl_autoload_register(function ($class_name)


	{

	include "PhpObjt Iteration/" .$class_name. ".php";

	}


);

 
 
	$class=new Person;
	
	foreach ($class as $key=>$value)
	
	
	{
	
		echo "<pre>";
	
		echo "$key=>$value";
	
		echo "</pre>";
		
	}
	
	$class->iteratorInner();
	

?>



