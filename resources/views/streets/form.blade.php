

	<div class="form-group">
		    {!! Form::label('name', 'Name:') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>


	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
