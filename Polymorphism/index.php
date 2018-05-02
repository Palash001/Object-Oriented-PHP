<?php

include "inc/header.php";

?>

<?php


class UserData
{

	public $user;
	
	public $userId;
	


	public function __construct($userName,$userId)
	
	{
	
		$this->user=userName;
		$this->userId=$userId;
		
	
	
	}
	
	public  function display()
	
	
	{
	
	 	echo "UserName is {$this->user} and userid is{$this->userId}";
	
	}
	



}


class Admin extends UserData


{

	public $level;
	
	
		public  function display()
	
	
	{
	
	 	echo "UserName is {$this->user} and userid is{$this->userId} and user Level is {$this->level}";
	
	}


}

$user="Pal";
$id="25";


$ur=new UserData($user,$id);

echo "<br/>";

$ur->display();
echo "<br/>";


$user="Admin";
$id="1";

$ad=new Admin($user,$id);

$ad->level="Administrator";

$ad->display();

?>

<?php
include "inc/footer.php";

?>

