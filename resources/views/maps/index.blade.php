@extends('master')

@section('content')
	<h1>
		Maps
	</h1>
	<hr/>
<div class="row">
	@foreach ($maps as $map)
		{{-- <article> --}}

			  <div class="col-sm-6 col-md-6">
			    <div class="thumbnail">
			      <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=527%C3%97250&w=527&h=250" alt="...">
			      <div class="caption">
			        <div class="row ">
			        	<div class="col-sm-9 col-md-9"><a href= "{{ action('MapsController@show', ($map->id)) }}"><h3>{{ $map->number }} - {{ $map->name }}</h3></a>

			        		<p>{{ $map->area }}	</p>
			        	</div>
			        	@if(Request::path()=== 'territories/maps/available')
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
