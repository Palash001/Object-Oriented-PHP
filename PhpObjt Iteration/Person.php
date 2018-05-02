<?php


class Person

	{
	
		public $Name="Paubad";
		
		public $Age="18";
		
		public $skill="Blogging";
		
		
		private $Email="paldj45@gmail.com";
		
		protected $Password="12345";
		
		
		function iteratorInner() 
		
		
	{
		
		echo "Inside Class <br/>";
				
		foreach ($this as $key=>$value)
	
	
	    {
	
		echo "<pre>";
	
		echo "$key=>$value";
	
		echo "</pre>";
		
	
	    }
		
		
	}
		

	
	
?>