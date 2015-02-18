@extends('photos.index')

@section('tab')

	<ul class="tabs"> 
		<li class="tab-title">
			<a href="/photos/{{ $photo->id }}">{{ $photo->matches()->count() }} Matches</a>
		</li> 
		<li class="tab-title active">
			<a href="/photos/{{ $photo->id }}/wins">{{ $photo->wins()->count() }} Wins</a>
		</li> 
		<li class="tab-title">
			<a href="/photos/{{ $photo->id }}/losses">{{ $photo->losses()->count() }} Losses</a>
		</li> 
		<li class="tab-title">
			<a href="/photos/{{ $photo->id }}/ties">{{ $photo->ties()->count() }} Ties</a>
		</li> 
	</ul> 

	@include('sections.thumbs_matches')

@endsection