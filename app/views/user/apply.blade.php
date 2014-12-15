@extends('layouts.master')
@section('content')

<div class="col-sm-12">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>All Companies</h2>				
		</header>
		<div>					
		<div class="widget-body">
			@if($app->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Institution Name</th>
			                <th>Jobs</th>
			                <th>Applicant's Name & Surname</th>
			                <th>Applicant's Surname</th>
			                <th>Create Job</th>
			            </tr>
			         </thead>
			         @foreach($app as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{$r->com_name}}</a></td>
			    		<td><a style="text-decoration:none;" href="#">{{$r->ads_name}}</a></td>
			    		<td><span>{{ucwords($r->birey_adi)." ". ucwords($r->birey_soyadi)}}</span></td>
			    		<td><span>{{$r->birey_soyadi}} </span></td>
			    		<td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}" class="btn btn-xs btn-primary">Company Profile</a></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
		</div>
		{{$app->links()}}
		</div>
	</div>
</div>
@stop