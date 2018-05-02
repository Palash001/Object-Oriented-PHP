<?php

include "inc/header.php";

include "Student.php";

?>

<?php

if(class_exists("Student")) //Class Name=Student//


	{

$st=new Student();

if(method_exists($st,'describe'))

$st->describe();


	}
	
	
	else 
	
	{
	
		echo "Method Not Found";
	
	}

		}

else

	{

echo "Class Not Found";

	}

?>

<?php
include "inc/footer.php";

?>

