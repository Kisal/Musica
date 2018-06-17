<?php

namespace Musica;

use Illuminate\Database\Eloquent\Model;
use Musica\Disc;

class Singer extends Model
{
    public function discs()
    {
        return $this->hasMany('Musica\Disc');
    }
}
