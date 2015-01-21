@extends('layouts.master')
@section('content')

<div class="container">
	<div class="col-sm-12">
	  <div class="error-template">
	    <h1>Oops!</h1><h2>404 Not Found</h2>
	    <div class="error-details">
	        Sorry, an error has occured, Requested page not found!
	    </div>
	    <div class="error-actions">
	      <a href="/dashboard" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Take Me Home </a>
	      <a href="{{URL::previous()}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left"></span></a>
	      
	    </div>
	  </div>
	</div>
</div>

@stop