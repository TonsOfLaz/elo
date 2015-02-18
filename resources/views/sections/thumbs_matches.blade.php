<div class="row">
	<div class="columns small-12">
		@foreach ($matches as $match)
			
			<a href="/photos/{{ $match->otherPhoto($photo->id)->id }}">
				<img src="{{ $match->otherPhoto($photo->id)->file_medium }}" alt="">
			</a>

		@endforeach
	</div>
</div>