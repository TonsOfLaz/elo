@extends('app')

@section('title')
Photo
@stop

@section('content')

	<div class="row">
		<div class="columns small-6"><img src="{{ $photo->file }}" alt=""></div>
		<div class="columns small-3">
			<div class="elo">
				Elo: {{ round($photo->elo) }}
			</div>
			<div class="rank">
				Rank: <a href="/albums/{{ $photo->album->id }}/rankings#photo{{ $photo->id }}">{{ $photo->rank() }} / {{ $photo->albumCount() }}</a>
			</div>
			<div class="album">
				Album: <a href="/albums/{{ $photo->album->id }}">{{ $photo->album->name }}</a>
			</div>
		</div>
		<div class="columns small-3">
			<a class="button" href="/albums/{{ $photo->album->id }}/rankings">Check Album Rankings</a>
			<a class="button" href="/albums/{{ $photo->album->id }}/play">Play Elo</a>
		</div>
	</div>

	
	@yield('tab')


@endsection