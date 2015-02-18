@extends('app')

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
		</div>
		<div class="columns small-3">
			<div class="album">
				Album: <a href="/albums/{{ $photo->album->id }}">{{ $photo->album->name }}</a>
			</div>
		</div>
	</div>

	@yield('tab')

@endsection