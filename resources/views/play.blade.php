@extends('app')

@section('title')
Play
@stop

@section('content')

<div class="row">
	<div id="matchesheader" class="columns small-12">
		<p>Round <span id="matchcount">1</span>... Fight!</p>
	</div>
</div>
<div id="matches">
	@foreach ($matches as $match)
		@include($match['view'])
	@endforeach
</div>
@stop