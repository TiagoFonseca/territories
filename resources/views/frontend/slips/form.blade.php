

	<div class="form-group">
		    {!! Form::label('name', 'Name:') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>

	<div class="form-group @if($errors->first('map_id')) has-error @endif">
			{!! Form::label('map', 'Map') !!}
			{!! Form::select('map_id', (['0' => 'Select a Map'] + $maps), null, ['required' => 'required', 'class' => 'form-control']) !!}
			<small class="text-danger">{{ $errors->first('map_id') }}</small>
	</div>


	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
