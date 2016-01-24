<div class="form-group @if($errors->first('slip_id')) has-error @endif">
	    {!! Form::label('slip', 'Slip') !!}
	    {!! Form::select('slip_id', (['0' => 'Select a Slip'] + $slips), null, ['required' => 'required', 'class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('slip_id') }}</small>
	</div>

	<div class="form-group">
		    {!! Form::label('number', 'Number:') !!}
		    {!! Form::text('number', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('number') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('street', 'Street:') !!}
	    {!! Form::text('street', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('street') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('type', 'Type:') !!}
	    {!! Form::text('type', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('type') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('status', 'Status:') !!}
	    {!! Form::text('status', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('status') }}</small>
	</div>

	<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description', null, ['class' => 'form-control']) !!}
			<small class="text-danger">{{ $errors->first('description') }}</small>
	</div>

	{{--  SUBMIT BUTTON --}}
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			<i class="fa fa-plus"></i>
		</div>
	</div>
