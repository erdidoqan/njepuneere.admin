@extends('layouts.master')
@section('content')

<div class="col-sm-12">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>All Companies</h2>				
		</header>
		<div>					
		<div class="widget-body">
			@if($company->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Institution Name</th>
			                <th>Institution NIPT</th>
			                <th>Sector</th>
			                <th>Country</th>
			                <th>Create Job</th>
			            </tr>
			         </thead>
			         @foreach($company as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="all_ins/create-job/{{$r->id}}">{{$r->com_name}}</a></td>
			    		<td><span class="text-danger">{{$r->com_nipt}}</span></td>
			    		<td><span class="text-warning">{{$r->com_sector}}</span></td>
			    		<td><span class="label label-info">{{$r->country}} </span></td>
			    		<td><a style="text-decoration: none;" href="all_ins/create-job/{{$r->id}}" class="btn btn-xs btn-primary">Create Job</a></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
		</div>
		</div>
	</div>
</div>
@stop