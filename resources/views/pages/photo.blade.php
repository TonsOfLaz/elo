@extends('app')

@section('title')
{{ $photo->name() }}
@stop

@section('content')

<div class="row">
	<div class="columns small-12">{{ $photo->name() }}</div>
</div>
<div class="row">
	<div class="columns small-6">
		<img src="{{ $photo->image }}" />
	</div>
	<div class="columns small-6">

	</div>
</div>

@stop