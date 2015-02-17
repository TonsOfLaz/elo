@extends('app')

@section('title')
Matches
@stop

@section('content')

<div class="row">
	<div class="columns small-12">Matches</div>
</div>
<div class="row">
	<div class="columns small-12">
		<ul>
			@foreach ($matches as $match)
				<li><span>{{ $match->photo1_id }}</span><a href="/matches/{{$match->id}}">View</a></li>
			@endforeach
		</ul>
	</div>
</div>

@stop