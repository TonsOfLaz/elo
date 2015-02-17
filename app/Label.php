<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'labels';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','user_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	public function photos()
	{
		return $this->belongsToMany('Photo');
	}
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	

}
