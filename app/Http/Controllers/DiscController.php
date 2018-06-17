<?php

namespace Musica\Http\Controllers;

use Illuminate\Http\Request;
use Musica\Disc;
use Musica\Singer;

class DiscController extends Controller
{
    public function index () {
    	$discs = Disc::orderBy('name','ASC')->paginate();
    	return view('web.listDisc',[
    		'discs' => $discs,
            'singer' => false,
    	]);
    }

    public function filterBySinger (Singer $singer){
		$discs = $singer->discs;
		return view('web.listDisc',[
    		'discs' => $discs,
    		'singer' => $singer,
    	]);
	}
    public function create () {
        $singers = Singer::orderBy('name','ASC')->get();
        return view('web.new',[
            'singers' => $singers,
        ]);
    }

    public function store (Request $request) {
        $this->validate($request,[
            'name' => 'required|max:255',
            'descripcion' => 'required|max:2000',
            'year' => 'required|integer',
            'singer' => 'required|exists:singers,id',
        ]);
        $disc = new Disc();
        $disc->name=$request->name;
        $disc->description=$request->description;
        $disc->year=$request->year;
        $disc->singer_id=$request->singer;
        $disc->save();
        return redirect('/disc')->with('info','The disc '.$disc->name.' has been created');
    }

    public function edit ($disc_id) {
        $disc = Disc::find($disc_id);
        $singers = Singer::orderBy('name','ASC')->get();
        return view('web.edit',[
            'disc' => $disc,
            'singers' => $singers,
        ]);
    }

    public function destroy($disc_id) {
        $disc = Disc::find($disc_id);
        $name_disc=$disc->name;
        $disc->delete();
        return back()->with('info','The disc '.$name_disc.' has been removed');
    }
     public function update (Request $request, $disc_id) {
        $this->validate($request,[
            'name' => 'required|max:255',
            'descripcion' => 'max:2000',
            'year' => 'required|integer',
            'singer' => 'required|exists:singers,id',
        ]);
        $disc = Disc::find($disc_id);
        $disc->name=$request->name;
        $disc->description=$request->description;
        $disc->year=$request->year;
        $disc->singer_id=$request->singer;
        $disc->save();
        return redirect('/disc')->with('info','The disc '.$disc->name.' has been updated');
    }
}
