
<div class="row match">
	{!! Form::open(['url' => 'matches']) !!}
		<input type="hidden" name="photo1_id" value="{{ $match['photo1']->id }}" />
		<input type="hidden" name="photo2_id" value="{{ $match['photo2']->id }}" />
		<input type="hidden" name="winner" value="0" />
		<div class="columns medium-4 medium-offset-1 small-12">
			<img value="{{ $match['photo1']->id }}" src="{{ $match['photo1']->file }}" alt="">
		</div>
		<div class="columns small-12 medium-2"><div class="tie button large expand tall secondary" value="0">Tie</div></div>
		<div class="columns medium-4 small-12">
			<img value="{{ $match['photo2']->id }}" src="{{ $match['photo2']->file }}" alt="">
		</div>
		<div class="columns small-12 medium-1"></div>
		
	{!! Form::close() !!}
</div>
