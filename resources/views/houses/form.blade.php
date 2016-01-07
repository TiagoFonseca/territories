	<div class="form-group">
	    {!! Form::label('number', 'Number:') !!}
	    {!! Form::text('number', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('number') }}</small>
	</div>

	<div class="form-group">
		    {!! Form::label('name', 'Name:') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('area', 'Area:') !!}
	    {!! Form::text('area', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('area') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('picture', 'Picture:') !!}
	    {!! Form::text('picture', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('picture') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('tags', 'tags:') !!}
	    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('tags') }}</small>
	</div>


	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
