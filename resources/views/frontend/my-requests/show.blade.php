@extends('frontend')

@section('content')
	<h1> 	{{$myMap['name']}} </h1>
	<div class="row">
	{!! Form::open(array('url' => '/changeHouseStatus', 'method'=>'POST')) !!}
		@foreach($myData['slip'] as $key => $slip)
		<div class="col s12 m6 l4 offset-1">
				<div class="card">

				<div class="card-content">
						<div class="card-title" data-slipID = "{{$slip['id']}}"><h5>Slip	{{$key}}</h5></div>
				@foreach($slip['street'] as $key => $street)
			
					<div> {{$key}} </div>
					@foreach($street['house'] as $key => $house)
						@if($key <> "id")
						<div class="ident-1">
							{!! Form::checkbox('completed', true, $house['status'], array('data-id' => $key, 'data-map' => $myMap['id'], 'class' => 'houseStatus filled-in', 'id' => 'house'.$house['number'])) !!}
							<label for="house{{$house['number']}}">{{$house['number']}}</label>
						</div>
						@endif
					@endforeach
	
				@endforeach
				
				<br/>
				<div class="card-action" data-slipID="{{$slip['id']}}" data-assignmentID="{{$ass_id}}">
	              <!-- Share button 
	              		Sets Share to 1 for the current slip -->

					<!--<button id="{{$slip['id']}}" class="share" type="button">Share slip</button>-->
	              	 
	              	<!--<input type="checkbox" name="" class="share" id="{{$slip['id']}}"/>-->
					{!! Form::checkbox('shared', true, $slip['shared'], array('class' => 'share', 'id' => $slip['id'])) !!}

	          		  <label for="{{$slip['id']}}">Share slip</label>
	            </div>
				
				
				</div>
				
				
					</div>
					
				
				</div>
		
	@endforeach
	{!! Form::close() !!}
	

	</div>
	
	
	
	</div>	
	<!-- Ajax function to write on the database everytime the state of a checkbox is changed -->
		
	<script type="text/javascript">
	$(document).ready(function(){
	
	//check if the request if from a checkbox	
	  $(".houseStatus").on("change", function() {            
	    $.ajax({
	      url: '/changeHouseStatus',
	      type: "post",
	      data: {'status':$(this).is(':checked'), 'id':$(this).attr('data-id'), 'map_id': $(this).attr('data-map'), '_token': $('input[name=_token]').val()},
	      success: function(data){
	       // alert("saved successfully!");
	      }
	    });      
	  }); 
	  
	  //check if the request is from the submit button to share the slip
	  //$('form').submit(function(event) {
	  	$('.share').change( function(e){
		 e.preventDefault();
	  	 $.ajax({
	      url: '/share',
	      type: "post",
	      data: {'shared':$(this).is(':checked'), 'slip_id': $(this).attr('id'),'assignment_id': $(this).parent().attr('data-assignmentID'), '_token': $('input[name=_token]').val()},
	      success: function(data){
	        //alert("saved successfully!");
	      }
	    });
	  });
	  
	});
	</script>
@stop
