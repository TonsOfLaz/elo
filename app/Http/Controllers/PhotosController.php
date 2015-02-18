<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;

use Illuminate\Http\Request;

class PhotosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$photos = Photo::all();
		return $photos;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "Create photos";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "Store photos";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$photo = Photo::find($id);
		$matches = $photo->matches();
		return view('photos.matches',compact('photo', 'matches'));
	}
	public function wins($id)
	{
		$photo = Photo::find($id);
		$matches = $photo->wins();
		return view('photos.wins',compact('photo', 'matches'));
	}
	public function losses($id)
	{
		$photo = Photo::find($id);
		$matches = $photo->losses();
		return view('photos.losses',compact('photo', 'matches'));
	}
	public function ties($id)
	{
		$photo = Photo::find($id);
		$matches = $photo->ties();
		return view('photos.ties',compact('photo', 'matches'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Edit photos $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update photos $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Destroy photos $id";
	}

}
