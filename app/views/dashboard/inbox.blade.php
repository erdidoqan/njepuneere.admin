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
        	<h3 class="txt-color-green">Examine Mail</h3>
        		<div class="table-wrap custom-scroll animated fast fadeInRight">
		<table id="inbox-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<td>
					<b>Receiver</b>
				</td>
				<td>
					<b>Subject/Message</b>
				</td>
				<td>
					<b>Date</b>
				</td>
			</tr>
		</thead>
	<tbody>
		<tr id="msg1 unread">
			
			<td class="inbox-data-from hidden-xs hidden-sm">
				<div>
					erdi
				</div>
			</td>
			<td class="inbox-data-message">
				<div>
					<span><span class="label bg-color-red">Important</span> konu</span> mesaj
				</div>
			</td>
			<td class="inbox-data-date hidden-xs">
				<div>
					1990
				</div>
			</td>
		</tr>
		<tr id="msg1">
			
			<td class="inbox-data-from hidden-xs hidden-sm">
				<div>
					erdi
				</div>
			</td>
			<td class="inbox-data-message">
				<div>
					<span><span class="label bg-color-red">Important</span> konu</span> mesaj
				</div>
			</td>
			<td class="inbox-data-date hidden-xs">
				<div>
					1990
				</div>
			</td>
		</tr>
		<tr id="msg1">
			
			<td class="inbox-data-from hidden-xs hidden-sm">
				<div>
					erdi
				</div>
			</td>
			<td class="inbox-data-message">
				<div>
					<span><span class="label bg-color-red">Important</span> konu</span> mesaj
				</div>
			</td>
			<td class="inbox-data-date hidden-xs">
				<div>
					1990
				</div>
			</td>
		</tr>

	</tbody>
</table>
	</div>
			</div>
		</div>
	</div>
</div>

@stop




