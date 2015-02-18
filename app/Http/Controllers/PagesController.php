<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Photo;
use App\Commands\AddInstagramAlbum;

class PagesController extends Controller {

	// Custom routes below
	
	function instagramTest() {
		$this->dispatch(
	        new AddInstagramAlbum("magicalboombox")
	    );
	    exit();
		
	}


}
