@extends('frontend')

@section('content')
	<h1>
		My Maps
	</h1>
	<hr/>
<div class="row">
	@foreach ($maps as $map)

			  <div class="col s12 m6 l4">
		          <div class="card">
		            <div class="card-image">
		              <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=527%C3%97350&w=527&h=350">
		              <span class="card-title ">{{ $map->number }} - {{ $map->name }}</span>
		            </div>
		            <div class="card-content">
		              <p >I am a very simple card. </p>
		            </div>
		            <div class="card-action">
		              <a href= "{{ action('Frontend\FrontendMyMapsController@show', ($map->id)) }}" >View slips</a>
		             
		            </div>
		          </div>
		        </div>


	@endforeach
</div>
@stop
