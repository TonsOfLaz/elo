@extends('app')

@section('title')
{{ $match->name() }}
@stop

@section('content')

<div class="row">
	<div class="columns small-12">{{ $match->name() }}</div>
</div>
<div class="row">
	<div class="columns small-6">
		<img src="{{ $match->image }}" />
	</div>
	<div class="columns small-6">

	</div>
</div>

@stop