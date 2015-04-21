<div class="stats">
	<a href="{{ route('users.following', $user->id) }}">
		<strong id="following" class="stat">
			{{ count($user->follows()->get()) }}	
		</strong>
		following
	</a>
	<a href="{{ route('users.followers', $user->id) }}">
		<strong id="followers" class="stat">
			{{ count($user->followers()->get()) }}
		</strong>
		followers
	</a>
</div>