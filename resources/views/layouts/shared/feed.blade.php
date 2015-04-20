@if(count($feed_items) > 0)
	<ol class="microposts">
		@foreach($feed_items as $micropost)
			@include('microposts._micropost', ['micropost' => $micropost])
		@endforeach
		{!! $feed_items->render() !!}
	</ol>
@endif