<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use Instagram;
use App\Album;
use App\Photo;
use Auth;
use Carbon\Carbon;

class AddInstagramAlbum extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;
	private $instagram_account;
	private $album;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($username)
	{
		$this->instagram_account = Instagram::searchUser($username);
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		// create new album
		set_time_limit(120);
		
		echo "<pre>";

		print_r($this->instagram_account);
		
		$data = $this->instagram_account->data[0];
		$insta_userid = $data->id;
		$insta_username = $data->username;

		if (Auth::check()) {
		    $userid = Auth::user()->id;
		} else {
			$userid = 1;
		}

		$album = Album::firstOrCreate( ['type' 		=> "Instagram",
										'name' 		=> $insta_username,
										'public' 	=> 1,
										'user_id' 	=> $userid,
										]);

		
		$result = Instagram::getUserMedia($insta_userid);
		do {
			// loop through all entries of a response
			foreach ($result->data as $data) {
				//print_r($data);
				$file_small = 	$data->images->thumbnail->url;
				$file_medium = 	$data->images->low_resolution->url;
				$file = 		$data->images->standard_resolution->url;
				$width = 		$data->images->standard_resolution->width;
				$height = 		$data->images->standard_resolution->width;
				$date = 		Carbon::createFromTimeStamp($data->created_time);

				$photo = Photo::firstOrCreate(['file_small' => 	$file_small,
											   'file_medium' => $file_medium,
											   'file' => 		$file,
											   'width' => 		$width,
											   'height' => 		$height,
											   'date' => 		$date,
											   'album_id' => 	$album->id,
											   ]);
			}
		// continue with the next result
		} while ($result = Instagram::pagination($result)); 
		echo "</pre>";
	}

}
