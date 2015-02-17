@extends('layouts.master')
@section('content')

<div class="col-sm-12">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>All Jobs</h2>				
		</header>
		<div>					
		<div class="widget-body">
		@if ($errors->has())
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Error!</strong> {{$errors->first()}}
                </div>
                @endif
                
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Error!</strong> {{Session::get('error')}}
                </div>
                @endif
                
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Success!</strong> {{Session::get('success')}}
                </div>
                @endif 

                @if (Session::has('warning'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Warning!</strong> {{Session::get('warning')}}
                </div>
                @endif 
			@if($jobs->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Jobs</th>
			                <th>Companies</th>
			                <th>Place</th>
			                <th>Date</th>
			                <th>Approval</th>
			            </tr>
			         </thead>
			         @foreach($jobs as $a)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="jobs/job/{{$a->id}}">{{ucwords($a->ads_name)}}</a></td>
			    		<td><a style="text-decoration:none;" href="#">{{$a->com_name}}</a></td>
			    		<td><span>{{ucwords($a->work_place)}}</span></td>
			    		<td><span>{{ Carbon::createFromTimestamp(strtotime($a->created_at))->diffForHumans() }} </span></td>
			    		<td> 
			    			<a href="jobs/job/{{$a->id}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-ok"></i></a>
			    			<a href="jobs/job/{{$a->id}}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> 
			    			<a href="jobs/job/{{$a->id}}" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-cog"></i></a> 
			    		</td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
		</div>
		{{$jobs->links()}}
		</div>
	</div>
</div>
@stop