@extends('layouts.master')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
        		<h3 class="text-danger"><strong>{{ucwords($ads->ads_name)}}</strong> <small>({{ucwords($ads->com_name)}})</small>, Applied List</h3>
       		
	       		
        		@if($app->count())
				  <table class="table table-hover">
				      <thead>
				            <tr><th>Institution Name</th>
				              <th>Jobs</th>
				              <th>Applicant's Name & Surname</th>
				              <th>Applicant's Date</th>
				              <th>Check CV</th>
				          </tr>
				         </thead>
				         @foreach($app as $r)
				       <tbody>   
				      <td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{$r->com_name}}</a></td>
				      <td><a style="text-decoration:none;" href="#">{{$r->ads_name}}</a></td>
				      <td><span>{{ucwords($r->birey_adi)." ". ucwords($r->birey_soyadi)}}</span></td>
				      <td><span class="label label-primary">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
				      <td><a style="text-decoration: none;" href="/birey_user/{{$r->user_id}}/{{$r->ads_id}}" class="btn btn-xs btn-primary">check user CV</a></td>
				    </tbody>
				    @endforeach
				  </table>
				@else
				    <div class="alert alert-warning alert-dismissible" role="alert">
				      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <strong>Warning!</strong> Institution has not yet any application.
				    </div>
				@endif
				{{$app->links()}}
			</div>
		</div>
	</div>
</div>
@stop