<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Default Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the connections below you wish to use as
	| your default connection for all work. Of course, you may use many
	| connections at once using the manager class.
	|
	*/

	'default' => 'main',

	/*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

	'connections' => [

		'main' => [
			'client_id' => 'e303b9599a8b43fcbd93f82e366256ba',
			'client_secret' => '92856f5428a54b088beb7a2a83067307',
			'callback_url' => 'http://protohyper.com'
		],

		'alternative' => [
			'client_id' => 'your-client-id',
			'client_secret' => null,
			'callback_url' => null
		],

	]

];
