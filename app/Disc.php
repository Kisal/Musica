<?php

namespace Musica;

use Illuminate\Database\Eloquent\Model;
use Musica\Singer;

class Disc extends Model
{
    public function singer (){
    	return $this->belongsTo(Singer::class);
   	}
}
