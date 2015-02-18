@extends('photos.index')

@section('tab')

	<div class="row">
		<div class="columns small-12">
			<ul class="tabs"> 
				<li class="tab-title active">
					<a href="/photos/{{ $photo->id }}">{{ $photo->matches()->count() }} Matches</a>
				</li> 
				<li class="tab-title">
					<a href="/photos/{{ $photo->id }}/wins">{{ $photo->wins()->count() }} Wins</a>
				</li> 
				<li class="tab-title">
					<a href="/photos/{{ $photo->id }}/losses">{{ $photo->losses()->count() }} Losses</a>
				</li> 
				<li class="tab-title">
					<a href="/photos/{{ $photo->id }}/ties">{{ $photo->ties()->count() }} Ties</a>
				</li> 
			</ul> 
		</div>
	</div>
	

	<div class="tabs_wrapper">
		@foreach ($matches as $match)
			<div class="row {{ $match->outcome($photo->id) }}">
				<div class="columns small-4">
					<a href="/photos/{{ $match->otherPhoto($photo->id)->id }}">
						<img src="{{ $match->otherPhoto($photo->id)->file_medium }}" alt="">
					</a>
				</div>
				<div class="columns small-4">
					{{ $match->outcome($photo->id) }}
				</div>
				<div class="columns small-4">
					{{ $match->date }}
				</div>
			</div>

		@endforeach
	</div>
@endsection