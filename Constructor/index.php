<?php 
include "inc/header.php";

?>


<?php

class Person{

public $name;
public $age;

public function __construct($name,$age)

{

 $this->name=$name;
 
 $this->age=$age;
 
}

public function personDetails()
{

echo "Person Name is {$this->name} and person age is {$this->age}";

}


}

$personOne=new Person("Palsh Al","27");
$personOne->personDetails();


?>

<?php include "inc/footer.php";?>