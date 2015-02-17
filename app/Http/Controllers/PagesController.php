<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Photo;
use Instagram;

class PagesController extends Controller {

	// Custom routes below
	function getRankings() {
		$photos = Photo::where('elo','>','0')->orderBy('elo', 'DESC')->get();
		return view('rankings', compact('photos'));
	}
	function instagramTest() {
		$ryan = Instagram::searchUser("blazogramma");
		
		echo "<pre>";
		print_r($ryan);
		echo "</pre>";
		$data = $ryan->data[0];
		echo $data->username;
		echo "<img src='".$data->profile_picture."'>";
		exit();
		$photos = Instagram::getUserMedia(19158560);
		$result = Instagram::pagination($photos);
		do {
			// loop through all entries of a response
			foreach ($result->data as $data) {
				print_r($data);
			}
		// continue with the next result
		} while ($result = Instagram::pagination($result)); 
	}


}
