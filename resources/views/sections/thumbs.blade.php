<div class="row">
	<div class="columns small-12">
		@foreach ($photos as $photo)
			
			<a href="/photos/{{ $photo->id }}">
				<img src="{{ $photo->file_small }}" alt="">
			</a>

		@endforeach
	</div>
</div>