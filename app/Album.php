<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albums';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['type','name','public','user_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	

}
