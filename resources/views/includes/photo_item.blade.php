<div class="photo-video-item">
	<p>Наслаждайтесь прекрасными фотографиями наших проектов</p>
		<div class="images">
			<ul>
				@foreach($images as $image)
					<li><a href=""><img src="{{ Request::root() }}/uploads/projects/small/{{ $image->name }}" alt=""></a></li>
				@endforeach
			</ul>
		</div>
</div>