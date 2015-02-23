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
		<div class="col-sm-8">
			<div class="well display-inline" style="width:820px;">
			<div class="pull-right" style="margin-top: 40px;">
        			<a href="/add-all-email" class="btn btn-success btn-xs">All User Emails</a>
        		</div>
        		<h3 class="txt-color-green">Send Mail</h3>
        		
        		{{ Form::open(array('url' => array('mailer'),'class'=>'smart-form','id'=>'smart-form-register', 'enctype' => 'multipart/form-data')) }}
	                      	
		            <section>

						<label class="textarea textarea-resizable"> <i class="icon-append fa fa-envelope"></i>
							{{ Form::textarea('alici', '',array('class' => 'custom-scroll', 'placeholder' => 'Emails', 'rows'=>'3')) }}

						</label>
						<div class="note">
						Separate by commas(,)
						</div>
					</section>
					
					<section>
						<label class="input"> <i class="icon-append fa fa-question-circle"></i>
							{{ Form::text('konu', '',array('class' => 'form-control', 'placeholder' => 'Subject')) }}
							<b class="tooltip tooltip-right">
								<i class="fa fa-warning txt-color-teal"></i> 
								 the subject of the article for mailing.</b> 
						</label>
					</section>

		            <div class="form-group">
		                <div class="col-sm-12">
		                	{{ Form::textarea('mesaj', '',array('class' => 'ckeditor')) }}
		                </div>
		            </div>

		            <footer>
						<button type="submit" class="btn btn-primary">
							Send Mail  <span class="fa fa-paper-plane"></span>
						</button>
						<button type="button" class="btn btn-default" onclick="window.history.back();">
							Back
						</button>
					</footer>

        		{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@if (Session::has('mail'))
<div class="container">
	<div class="row">
		<div class="col-sm-2" id="side" >
        	<div class="well display-inline" style="width:300px;right: 5px;position: inherit !important;">
          
						@foreach(Session::get('mail') as $key)
							{{$key.";"}}
						@endforeach
					
      		</div>
        </div>
    </div>
</div>
@endif  
<script type="text/javascript">
	


</script>

@stop