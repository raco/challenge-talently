<?php

use App\Producto;
use App\TickInterface;

namespace App;

class VillaPeruana extends Producto implements TickInterface
{

    public function tick()
    {
        if ($this->name != 'Pisco Peruano' and $this->name != 'Ticket VIP al concierto de Pick Floid') {
            if ($this->quality > 0) {
                if ($this->name != 'Tumi de Oro Moche') {
                    $this->quality = $this->quality - 1;
                }
            }
        } else {
            if ($this->quality < self::MAX_QUALITY) {
                $this->quality = $this->quality + 1;

                if ($this->name == 'Ticket VIP al concierto de Pick Floid') {
                    if ($this->sellIn < 11) {
                        if ($this->quality < self::MAX_QUALITY) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                    if ($this->sellIn < 6) {
                        if ($this->quality < self::MAX_QUALITY) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                }
            }
        }

        if ($this->name != 'Tumi de Oro Moche') {
            $this->sellIn = $this->sellIn - 1;
        }

        if ($this->sellIn < 0) {
            if ($this->name != 'Pisco Peruano') {
                if ($this->name != 'Ticket VIP al concierto de Pick Floid') {
                    if ($this->quality > 0) {
                        if ($this->name != 'Tumi de Oro Moche') {
                            $this->quality = $this->quality - 1;
                        }
                    }
                } else {
                    $this->quality = $this->quality - $this->quality;
                }
            } else {
                if ($this->quality < self::MAX_QUALITY) {
                    $this->quality = $this->quality + 1;
                }
            }
        }
    }
}
