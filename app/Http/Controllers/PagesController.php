<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Photo;

class PagesController extends Controller {

	// Custom routes below
	function getRankings() {
		$photos = Photo::where('elo','>','0')->orderBy('elo', 'DESC')->get();
		return view('rankings', compact('photos'));
	}


}
