<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;
use App\Photo;

use Illuminate\Http\Request;

class AlbumsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albums = Album::all();
		return $albums;
	}
	public function publicAlbums() {
		$albums = Album::where('public', true)->get();
		return view('albums_public', compact('albums'));
	}

	function getRankings($id) {
		$album = Album::find($id);
		$photos = $album->photos()->where('elo','>','0')->orderBy('elo', 'DESC')->get();
		return view('rankings', compact('photos', 'album'));
	}
	public function playBreak(Request $request) {
		$stats = "";
		return view('sections.break', compact('stats'));
	}

	public function getPlay($id) {
		$album = Album::find($id);
		$matches = [];
		$buffer = 5;

		for ($i=0; $i<$buffer; $i++) {
			$photo1 = $album->photos->random();
			$photo2 = $album->photos->random();
			$matches[$i]['photo1'] = $photo1;
			$matches[$i]['photo2'] = $photo2;
			$view_str = $this->getViewString($photo1, $photo2);
			$matches[$i]['view'] = $view_str;
		}
		return view('play', compact('matches', 'album'));
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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "Create albums";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "Store albums";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$album = Album::find($id);
		$photos = $album->photos;
		return view("album", compact('album', 'photos'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Edit albums $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update albums $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Destroy albums $id";
	}

}
