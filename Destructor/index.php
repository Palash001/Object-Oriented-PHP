<?php 
include "inc/header.php";

?>


<?php

class Person{

public $name;
public $age;

public $id;

public function _construct($name,$age)

{

 $this->name=$name;
 
 $this->age=$age;
 
}

public function setId($id)
{

$this->id=$id;

}

public function __destruct()


{

if(! empty($this->id)) 

{

	echo "Saving Person";

}

}


}

$personOne=new Person("Palsh Al","27");

$personOne->setId(12);

unset($personOne);


?>

<?php include "inc/footer.php";?>