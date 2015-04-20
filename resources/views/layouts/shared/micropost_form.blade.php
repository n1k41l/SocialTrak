{!! Form::model($micropost = new App\Micropost, ['url' => 'microposts']) !!}
	@include('errors.errors')
	<div class="field">
		{!! Form::textarea('content', null, ['placeholder' => 'Compose new micropost...']) !!}
	</div>
	{!! Form::submit('Post', ['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}