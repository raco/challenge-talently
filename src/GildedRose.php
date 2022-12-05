<?php

namespace App;

class GildedRose extends Producto implements TickInterface
{
	public function tick()
	{
		if ($this->quality > 0) {
			$this->quality = $this->quality - 2;
		}

		if ($this->sellIn < 1 and $this->quality > 0) {
			$this->quality = $this->quality - 2;
		}

		$this->sellIn = $this->sellIn - 1;
	}
}
