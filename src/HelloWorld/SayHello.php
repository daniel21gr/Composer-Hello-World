<?php
namespace HelloWorld;

class SayHello
{
	public static function world()
	{
		return 'Hello World, Composer!';
	}
	
	public static function to_me($name)
	{
		return 'Hello World, '.$name.'!';
	}
}