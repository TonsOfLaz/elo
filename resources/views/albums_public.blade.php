@extends('app')

@section('title')
Public Albums
@stop

@section('content')
@foreach ($albums as $album)
	<div class="row">
		<div class="columns small-4">
			<h2>Album: <a class="button" href="/albums/{{ $album->id }}">{{ $album->name }}</a> </h2>
		</div>
		<div class="columns small-4">
			Top Photos here
		</div>
		<div class="columns small-4">
			<a class="button" href="/albums/{{ $album->id }}/rankings">Rankings</a>
			<a class="button" href="/albums/{{ $album->id }}/play">Play Elo</a>
		</div>
	</div>
@endforeach
	
@stop