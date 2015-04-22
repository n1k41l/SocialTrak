@if (Auth::check())
	<div class="follow_form">
		@if(Auth::user()->isFollowed($user))
			@include('users._unfollow')
		@else
			@include('users._follow')
		@endif
	</div>
@endif