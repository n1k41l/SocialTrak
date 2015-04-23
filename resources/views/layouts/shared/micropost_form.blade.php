{!! Form::model($micropost = new App\Micropost, ['url' => 'microposts']) !!}
	@include('errors.errors')
	<div class="field">
		{!! Form::textarea('content', null, [ 
			'class' => 'form-control',
			'placeholder' => 'Compose new micropost...',
			'maxlength' => '140',
			'rows' => '4',
			'id' => '_micropost'
		]) !!}	
	</div>
	{!! Form::submit('Post', ['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}
<h6 class="pull-right" id="micro_count"></h6>