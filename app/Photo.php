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
	protected $fillable = ['file','file_small','file_medium','height','width','date','elo','album_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	public function labels()
	{
		return $this->belongsToMany('App\Label');
	}
	
	public function album()
	{
		return $this->belongsTo('App\Album');
	}
	public function getRatio() {
		return $this->width / $this->height;
	}
	public function matches1() {
		return $this->hasMany('App\Match', 'photo1_id');
	}
	public function matches2() {
		return $this->hasMany('App\Match', 'photo2_id');
	}
	public function matches() {
		return $this->matches1->merge($this->matches2);
	}
	public function wins() {
		$wins = $this->matches()->filter(function($match)
	    {
	        if ($match->winner == $this->id) {
	            return true;
	        }
	    });
	    return $wins;
	}
	public function losses() {
		$losses = $this->matches()->filter(function($match)
	    {
	        if ($match->winner > 0 && $match->winner != $this->id) {
	            return true;
	        }
	    });
	    return $losses;
	}
	public function ties() {
		$ties = $this->matches()->filter(function($match)
	    {
	        if ($match->winner == 0) {
	            return true;
	        }
	    });
	    return $ties;
	}

}
