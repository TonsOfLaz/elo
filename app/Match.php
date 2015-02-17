<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'matches';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['photo1_id','photo2_id','photo1_elo','photo2_elo','winner','ip','user_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	public function photo1()
	{
		return $this->belongsTo('Photo', 'photo1_id');
	}
	
	public function photo2()
	{
		return $this->belongsTo('Photo', 'photo2_id');
	}
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	

}
