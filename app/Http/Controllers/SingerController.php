<?php

namespace Musica\Http\Controllers;

use Illuminate\Http\Request;
use Musica\Singer;

class SingerController extends Controller
{
	public function index () {
    	$singers = Singer::orderBy('name','ASC')->paginate();
    	return view('web.listSingers',[
    		'singers' => $singers,
    	]);
	}
	
}
