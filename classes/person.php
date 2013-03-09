<?php
//primative: boolean ( t/f ), integer, string
//variable
//array

//Classes have methods and properties


//objects encapsulate the data and the methods to work with the data.
class Person {
	public $eyeColor;
	public $height;
	public $ethnicity;
	public $weight;
	protected $name;
	public $age;

	public function __construct($eyeColor, $height, $ethnicity, $weight, $name, $age)
	{
		$this->eyeColor 	= $eyeColor;
		$this->height 		= $height;
		$this->weight 		= $weight;
		$this->ethnicity 	= $ethnicity;
		$this->name 		= $name;
		$this->age 			= $age;

		$this->makeIntroduction();
	}
	public function makeIntroduction()
	{
		echo "Hi, my name is ".$this->name." Im ".$this->age." years old and im ".$this->ethnicity."<br>";
	}

}

class WebDeveloper extends Person
{
	public $favoriteLanguages;
	private $profession;

	public function __construct($eyeColor, $height, $ethnicity, $weight, $name, $age, $favoriteLanguages)
	{
		echo "<br><br>";
		$this->favoriteLanguages = $favoriteLanguages;
		parent::__construct($eyeColor, $height, $ethnicity, $weight, $name, $age);
	}
	//polymorphism: one method can behave differently in a different context.
	public function makeIntroduction(){
		echo "Hi my name is ".$this->name." and my favorite languages are: ";
		foreach($this->favoriteLanguages as $language)
		{
			echo $language."<br>";
		}
	}
	public function setProfession($profession)
	{
		$this->profession = $profession;
	}
	public function getProfession()
	{
		echo $this->profession;
	}

}