@extends('layouts.master')
@section('content')

<div class="container">
	<div style="width:820px;">
		@if ($errors->has())
		<div class="alert alert-warning alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		    <strong>Error!</strong> {{$errors->first()}}
		</div>
		@endif

		@if (Session::has('error'))
		<div class="alert alert-danger alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		     {{Session::get('error')}}
		</div>
		@endif

		@if (Session::has('success'))
		<div class="alert alert-success alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		    {{Session::get('success')}}
		</div>
		@endif  
	</div> 
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
        		<h3 class="txt-color-green">Send Mail</h3>
        		
        		{{ Form::open(array('url' => array('mailer'),'class'=>'form-horizontal','id'=>'smart-form-register', 'enctype' => 'multipart/form-data')) }}
	                      	
        			

        			<div class="form-group">
		            	<div class="col-sm-12">
		                 {{ Form::text('alici', '',array('class' => 'form-control', 'placeholder' => 'Alici Mails')) }}
			                <div class="note right">
	                        	<strong>Note:</strong> Separate by commas(,).
	                      	</div>
		                </div>
		               
		            </div>	

		            <div class="form-group">
		            	<div class="col-sm-12">
		                 {{ Form::text('konu', '',array('class' => 'form-control', 'placeholder' => 'Subject')) }}
		                </div>
		            </div>	

		            <div class="form-group">
		                <div class="col-sm-12">
		                	{{ Form::textarea('mesaj', '',array('class' => 'ckeditor')) }}
		                </div>
		            </div>

		            <div class="form-group">
			            <div class="col-sm-offset-2 col-sm-10">
			              <div class="pull-right">
			                <button type="submit" class="btn btn-success btn-lg">Send Mail  <span class="fa fa-paper-plane"></span></button>
			              </div>
			            </div>
			        </div>
        		{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@stop