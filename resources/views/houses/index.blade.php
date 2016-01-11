@extends('master')

@section('content')
	<h1>
		Houses
	</h1>
	<hr/>
<div class="row">
	@foreach ($houses as $house)
		{{-- <article> --}}

			  <div class="col-sm-6 col-md-6">
			    <div class="thumbnail">
			      <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=527%C3%97250&w=527&h=250" alt="...">
			      <div class="caption">
			        <div class="row ">
			        	<div class="col-sm-9 col-md-9"><a href= "{{ action('HousesController@show', ($house->id)) }}"><h3>{{ $house->number }} - {{ $house->name }}</h3></a>

			        		<p>{{ $house->area }}	</p>
			        	</div>
			        	@if(Request::path()=== 'houses/houses/available')
									<div class="col-sm-3 col-md-3 ">
										<a href="#" class="btn btn-primary pull-right" role="button">Request</a>
									</div>
			        	@endif
			        </div>

			      </div>
			    </div>
			  </div>


		{{-- </article> --}}
	@endforeach
</div>
@stop
