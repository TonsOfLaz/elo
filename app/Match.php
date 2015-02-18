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
		return $this->belongsTo('App\Photo', 'photo1_id');
	}
	
	public function photo2()
	{
		return $this->belongsTo('App\Photo', 'photo2_id');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function otherPhoto($photoid) {
		if ($this->photo1_id == $photoid) {
			return $this->photo2;
		}
		if ($this->photo2_id == $photoid) {
			return $this->photo1;
		}
	}
	public function outcome($photoid) {
		if ($this->winner == $photoid) {
			return "Won";
		}
		if ($this->winner > 0 && $this->winner != $photoid) {
			return "Lost";
		}
		if ($this->winner == 0) {
			return "Tied";
		}
	}

}
