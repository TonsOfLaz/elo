<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['file','height','width','date','elo','album_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	public function labels()
	{
		return $this->belongsToMany('Label');
	}
	
	public function album()
	{
		return $this->belongsTo('Album');
	}
	

}
