@extends('app')

@section('title')
Rankings
@stop

@section('content')
<div class="row">
	<div class="columns small-3"><h2>Photo</h2></div>
	<div class="columns small-3"><h2>Elo</h2></div>
	<div class="columns small-2"><h2>Wins</h2></div>
	<div class="columns small-2"><h2>Losses</h2></div>
	<div class="columns small-2"><h2>Ties</h2></div>
</div>
@foreach ($photos as $photo)
	<div class="row">
		<div class="columns small-3"><img src="{{ $photo->file_small }}" alt=""></div>
		<div class="columns small-3"><h2>{{ round($photo->elo) }}</h2></div>
		<div class="columns small-2"><h2>{{ $photo->wins()->count() }}</h2></div>
		<div class="columns small-2"><h2>{{ $photo->losses()->count() }}</h2></div>
		<div class="columns small-2"><h2>{{ $photo->ties()->count() }}</h2></div>
	</div>
@endforeach
	
@stop