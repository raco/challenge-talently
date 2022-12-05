<?php

namespace App;

class Producto
{
	public $name;

	public $quality;

	public $sellIn;

	protected const MAX_QUALITY = 50;

	public function __construct($name, $quality, $sellIn)
	{
		$this->name = $name;
		$this->quality = $quality;
		$this->sellIn = $sellIn;
	}

	public static function of($name, $quality, $sellIn)
	{
		return new static($name, $quality, $sellIn);
	}
}
