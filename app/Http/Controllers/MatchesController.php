<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Match;
use App\Photo;
use App\Rating;

use Auth;
use Sentry;
use Illuminate\Http\Request;

class MatchesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$matches = Match::all();
		return view('pages.matches', array('matches' => $matches));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "Create matches";
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$photo1 = Photo::find($request->input('photo1_id'));
		$photo2 = Photo::find($request->input('photo2_id'));

		// if elo is null, add default
		$photo1_elo = $photo1->elo ? $photo1->elo : 1000;
		$photo2_elo = $photo2->elo ? $photo2->elo : 1000;

		// Add elo ratings to match records
		$newmatch_arr = $request->all();
		$newmatch_arr['photo1_elo'] = $photo1_elo;
		$newmatch_arr['photo2_elo'] = $photo2_elo;
		$newmatch_arr['ip'] = $request->getClientIp();

		if (Auth::check()) {
		    $newmatch_arr['user_id'] = Auth::user()->id;
		} else {
			$newmatch_arr['user_id'] = 1;
		}

		
		$newmatch = Match::create($newmatch_arr);
	
		$newmatch->save();

		// process both in elo function
		switch($request->winner) {
			case $photo1->id:
				$rating = new Rating($photo1_elo, $photo2_elo, 1, 0);
				break;
			case $photo2->id:
				$rating = new Rating($photo1_elo, $photo2_elo, 0, 1);
				break;
			case 0:
				$rating = new Rating($photo1_elo, $photo2_elo, .5, .5);
				break;
				
		}

		$results = $rating->getNewRatings();

		$photo1->elo = $results['a'];
		$photo2->elo = $results['b'];

		$photo1->save();
		$photo2->save();

		return $this->nextMatch();

	}
	public function nextMatch() {
		// Print out next random match to screen
		$match = [];
		$photo1 = Photo::orderByRaw("random()")->first();
		$photo2 = Photo::orderByRaw("random()")->first();
		$match['photo1'] = $photo1;
		$match['photo2'] = $photo2;

		$view_str = $this->getViewString($photo1, $photo2);
		return view($view_str, compact('match'));
	}

	public function getViewString($photo1, $photo2) {
		$photo1_ratio = $photo1->getRatio();
		$photo2_ratio = $photo2->getRatio();
		if ($photo1_ratio >= 1) {
			$photo1view = "wide";
		} else {
			$photo1view = "tall";
		}
		if ($photo2_ratio >= 1) {
			$photo2view = "wide";
		} else {
			$photo2view = "tall";
		}
		return "sections.match_".$photo1view."_".$photo2view;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$match = Match::find($id);
		return $match;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Edit matches $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update matches $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Destroy matches $id";
	}

}
