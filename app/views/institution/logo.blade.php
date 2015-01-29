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
        		<h3 class="txt-color-green">Company Logo Update</h3>
        		<div class="col-sm-4">

        			<img src="{{User::$img_sirket_src."".$sirket->logo}}" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ><hr>
        		</div>

        		<div class="col-sm-8">
        			<div class="alert alert-warning">
        				<p>- This section of Image Files (".jpeg", ".jpg", ".gif") can be added.</p><br>
        				<p>- Size 1 MB of files can be added by passing the record.</p>
        			</div>
        		</div>
        		<div class="col-sm-12">
        			{{ Form::open(array('url' => array('logo_up',$sirket->id), 'enctype' => 'multipart/form-data')) }}
						{{ form::file('logo') }}<br>
						<input type="hidden" name="img_bckp" value="{{$data['logo']}}" /> 
						{{ form::submit('update', array('class'=>'btn btn-success')) }}
					{{ Form::close() }}
					<input type="hidden" id="modal" value="{{$data['modal']}}" />
        		</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crop Logo</h4>
      </div>
       <div class="modal-body">
			{{ Form::open(array('url' => array('crop', $sirket->id),'onsubmit'=>'return checkCoords();', 'enctype' => 'multipart/form-data')) }}
				<img src="{{User::$img_sirket_src."".$sirket->logo}}" alt="logo" id="cropbox" class="img-rounded" />
				<input type="hidden" id="x" name="x" />			
				<input type="hidden" id="y" name="y" />			
				<input type="hidden" id="w" name="w" />			
				<input type="hidden" id="h" name="h" />			
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-success">Crop Logo</button>
        	{{ Form::close() }}
        </div>
    </div>
  </div>
</div>
<style type="text/css">
	.jcrop-keymgr{opacity: 0;}
</style>

<script type="text/javascript">
	var modal;
	if ($('#modal').val() == 'true'){
		modal = true;
	} else {
		modal = false;
	}
		$(function() {
	            $('#cropbox').Jcrop({
	                aspectRatio : 2,
	                onSelect : updateCoords
	            });
	            $('#myModal').modal({show: modal});
	        });
			
	 
	        function updateCoords(c) {
	            $('#x').val(c.x);
	            $('#y').val(c.y);
	            $('#w').val(c.w);
	            $('#h').val(c.h);
	        };
	 
	        function checkCoords() {
	            if (parseInt($('#w').val()))
	                return true;
	            alert('Please select a crop region then press submit.');
	            return false;
	        };

	loadScript("/js/plugin/jcrop/jquery.Jcrop.min.js", function() {
		loadScript("/js/plugin/jcrop/jquery.color.min.js", pagefunction);
	});

</script>

@stop