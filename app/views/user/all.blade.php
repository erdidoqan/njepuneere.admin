@extends('layouts.master')
@section('content')

<div class="col-sm-12">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Users</h2>				
		</header>
		<div>					
		<div class="widget-body">
			@if($users->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Name Surname</th>
			                <th>Gender</th>
			                <th>Email</th>
			                <th>Country / City</th>
			                <th>Register Date</th>
			            </tr>
			         </thead>
			         @foreach($users as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{ucwords($r->adi)." ". ucwords($r->soyadi)}}</a></td>
			    		<td> <span>{{ucwords($r->cinsiyet)}}</span> </td>
			    		<td><span>{{$r->email}}</span></td>
			    		<td><span>{{ucwords($r->ulke)." / ". ucwords($r->sehir)}}</span></td>
			    		<td><span class="label label-primary">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
		</div>
		{{$users->links()}}
		</div>
	</div>
</div>
@stop