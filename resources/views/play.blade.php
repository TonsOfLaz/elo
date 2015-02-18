@extends('app')

@section('title')
Playing {{ $album->name }} 
@stop

@section('content')

<div class="row">
	<div class="columns small-3">
		<a href="/albums/{{ $album->id }}">{{ $album->name }}</a> 
		<a class="button" href="/albums/{{ $album->id }}/rankings">Rankings</a>
	</div>
	<div id="matchesheader" class="columns small-6">
		<p>Round <span id="matchcount">1</span>... Fight!</p>
	</div>
	<div class="columns small-3">
		<p></p>
	</div>
</div>
<div id="matches">
	@foreach ($matches as $match)
		@include($match['view'])
	@endforeach
</div>
@stop