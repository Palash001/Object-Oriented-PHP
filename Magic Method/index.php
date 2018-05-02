<?php

include "inc/header.php";

?>

<?php

class Student


{

public $name;

public function describe()


{

	echo "I am Student. <br/>";

}


public function __get($pm)

{

	echo "$pm doesnot exist <br/>";

} 



public function __set($pm,$value)

{

	echo "We set $pm->Value";

} 




public function __call($pm,$value)

{

	echo 'There is no<b>'.$pm.'</b> method and Arguments:'.implode(',',$value);

} 





}

$st=new Student();

$st->describe();
$st->Palas;

$st->age=14;


$st->notExistMethdo('2','8','5');

?>

<?php
include "inc/footer.php";

?>

