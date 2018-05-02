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
	
		$this->user=$userName;
		$this->userId=$userId;
		
		echo "UserName is {$this->user} and userid is{$this->userId}";
	
	}
	
	
	public function __destruct()
	
	{
	
		unset ($this->user);
		unset($this->userId);
	
	}


}

$user="Pal";
$id="25";


$ur=new UserData($user,$id);

?>

<?php
include "inc/footer.php";

?>

