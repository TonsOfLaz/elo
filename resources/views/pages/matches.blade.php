@extends('app')

@section('title')
Matches
@stop

@section('content')

<div class="row">
	<div class="columns small-12">Matches</div>
</div>
<div class="row">
	<div class="columns small-12 medium-3">[LISTFUNCTIONS]</div>
	<div class="columns small-12 medium-9">
		<ul class="list-expandable">
						@foreach ($matches as $obj)
						<li><span>{{ $obj->name() }}</span><div class="list-expandable-contents"><a href="/matches/{{$obj->id}}">View</a></div></li>
						@endforeach
					</ul>
	</div>
</div>

@stop