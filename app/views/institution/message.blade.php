@extends('layouts.master')
@section('content')

<div class="container">
  <div style="width:820px;">
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <span>Error!</span> {{Session::get('error')}}
    </div>
    @endif

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <span class="text-info">Success!</span> {{Session::get('success')}}
    </div>
    @endif
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
      			<a href="/all_ins" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back to all institution</a>
        		<h3 class="text-danger">Send a message to, <strong>{{ucwords($sirket->com_name)}}</strong></h3>
				{{ Form::open(array('url' => array('send-message',$sirket->id),'class'=>'smart-form','id'=>'smart-form-register', 'enctype' => 'multipart/form-data')) }}
	                      	
		            <section>

						<h4>{{ucwords($sirket->com_name)}}<small>, Authorized: {{ucwords($sirket->name). " ". ucwords($sirket->sname)}}</small></h4>

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
							Send Message  <span class="fa fa-paper-plane"></span>
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

@stop