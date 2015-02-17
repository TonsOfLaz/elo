@extends('app')

@section('title')
Rankings
@stop

@section('content')
@foreach ($photos as $photo)
	<div class="row">
		<div class="columns small-12 medium-6"><img src="{{ $photo->file }}" alt=""></div>
		<div class="columns small-12 medium-6"><h2>{{ round($photo->elo) }}</h2></div>
	</div>
@endforeach
	
@stop