
<div class="form-group @if($errors->first('user_id')) has-error @endif">
	    {!! Form::label('user', 'User') !!}
	    {!! Form::select('user_id', (['0' => 'Select a User'] + $users), null, ['required' => 'required', 'class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('user_id') }}</small>
	</div>
		<div class="form-group @if($errors->first('map_id')) has-error @endif">
	    {!! Form::label('map', 'Map') !!}
	    {!! Form::select('map_id', (['0' => 'Select a Map'] + $maps), null, ['required' => 'required', 'class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('map_id') }}</small>
	</div>

@if (Request::is('*/edit'))
		<div class="form-group">
				{!! Form::label('assigned_on', 'Assigned On:') !!}
				{!! Form::input('date', 'assigned_on', $assignment->assigned_on->format('Y-m-d'), ['class' => 'form-control']) !!}
				<small class="text-danger">{{ $errors->first('assigned_on') }}</small>
		</div>
		<div class="form-group">
	    {!! Form::label('finished_on', 'Finished on:') !!}
	    {!! Form::input('date', 'finished_on', date('Y-m-d'), ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('finished_on') }}</small>
		</div>

	@else
			<div class="form-group">
					{!! Form::label('assigned_on', 'Assigned On:') !!}
					{!! Form::input('date', 'assigned_on', date('Y-m-d'), ['class' => 'form-control']) !!}
					<small class="text-danger">{{ $errors->first('assigned_on') }}</small>
			</div>
	@endif

	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
