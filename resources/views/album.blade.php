@extends('app')

@section('title')
{{ $album->name }} Album
@stop

@section('content')
<div class="row">
	<div class="columns small-12">
		<h2>Album: {{ $album->name }} </h2>
		<a class="button" href="/albums/{{ $album->id }}/rankings">Check Rankings</a>
		<a class="button" href="/albums/{{ $album->id }}/play">Play Elo</a>
	</div>
</div>
@include('sections.thumbs')
	
@stop