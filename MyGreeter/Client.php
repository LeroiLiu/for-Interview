<?php
namespace MyGreeter;
ini_set('date.timezone','Asia/Shanghai');

class Client
{
	
	//Static private variable used to hold class objects
	static private $instance;

	//Constructor
	private function __construct()
	{

	}

	//to prevent the object is cloned
	private function __clone(){

	}

	//Determine if the instance already exists, if not, create it.
	static public function Instance(){
		if (!self::$instance instanceof self) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	//greeting
	public function getGreeting(){
		$hour = date("H",time());
		switch ($hour) {
			case $hour>=0&&$hour<12:
				return 'Good morning';
				break;
			case $hour>=12&&$hour<18:
				return 'Good afternoon';
				break;
			case $hour>=18&&$hour<24:
				return 'Good evening';
				break;
			default:
				return 'You may not be on the earth';
				break;
		}
	}

}