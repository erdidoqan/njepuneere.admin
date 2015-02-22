@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div class="well well display-inline">
				<a href="create-comp" class="btn btn-lg btn-block btn-success">Create Institution</a>
			</div>
			<div class="well well display-inline">
				<a href="all_ins" class="btn btn-lg btn-block btn-primary">All Institution</a>
			</div>
			<div class="well well display-inline">
				<a href="all_app" class="btn btn-lg btn-block btn-info">All Applicant</a>
			</div>
			<div class="well well display-inline">
				<a href="jobs" class="btn btn-lg btn-block btn-warning">All Jobs</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="row">
		<div class="col-sm-12">
			<div class="well well display-inline" style="width:1130px;">
				<h3 class="txt-color-red">Lastest Jobs</h3>
				<a href="jobs" class="btn btn-primary btn-xs right">All Jobs </a>
				<hr>
				@if($ads->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Jobs</th>
			                <th>Companies</th>
			                <th>Place</th>
			                <th>Date</th>
			                <th>Status</th>
			                <th>Approval</th>
			            </tr>
			         </thead>
			         @foreach($ads as $a)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="/jobs/job/{{$a->id}}">{{ucwords($a->ads_name)}}</a></td>
			    		<td><a style="text-decoration:none;" href="/all_ins/profile_ins/{{$a->user_id}}">{{$a->com_name}}</a></td>
			    		<td><span>{{ucwords($a->work_place)}}</span></td>
			    		<td><span>{{ Carbon::createFromTimestamp(strtotime($a->created_at))->diffForHumans() }} </span></td>
			    		<td>
			    		@if($a->active == 1)
			    			<span class="badge bg-color-green"> <i class="fa fa-circle"></i> </span> Online
			    		@else
			    			<span class="badge bg-color-red"> <i class="fa fa-circle"></i> </span> Passive
			    		@endif
			    		</td>
			    		<td> 
			    			<a href="" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-ok"></i></a>
			    			<a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> 
			    			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-cog"></i></a> 
			    		</td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif

			</div>
		</div>
</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="well well display-inline" style="width:550px;">
				<h3 class="txt-color-red">Lastest Users</h3>
				<a href="users" class="btn btn-primary btn-xs right">All Users </a>
				<hr>
				@if($user->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Name Surname</th>
			                <th>Gender</th>
			                <th>City</th>
			                <th>Register Date</th>
			            </tr>
			         </thead>
			         @foreach($user as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{ucwords($r->adi)." ".ucwords($r->soyadi)}}</a></td>
			    		<td><a style="text-decoration:none;" href="#">{{$r->cinsiyet}}</a></td>
			    		<td><span>{{ucwords($r->ulke)." / ". ucwords($r->sehir)}}</span></td>
			    		<td><span>{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif

			</div>
		</div>

		<div class="col-sm-6">
			<div class="well well display-inline" style="width:550px;">
				<h3 class="txt-color-red">Lastest Institution</h3>
				<a href="all_ins" class="btn btn-primary btn-xs right">All Institution</a>
				<hr>
				@if($com->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Name Surname</th>
			                <th>Institution</th>
			                <th>Date</th>
			            </tr>
			         </thead>
			         @foreach($com as $r)
			         <tbody>   
			    		<td><span>{{str_limit(ucwords($r->name),10)." ".str_limit(ucwords($r->sname),10)}}</span></td>
			    		<td><a style="text-decoration:none;" href="#">{{str_limit($r->com_name,20)}}</a></td>
			    		<td><span>{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="well well display-inline" style="width:550px;">
				<h3 class="txt-color-red">Lastest Applicant</h3>
				<a href="all_app" class="btn btn-primary btn-xs right">All Applicant</a>
				<hr>
				@if($app->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Company</th>
			                <th>Jobs</th>
			                <th>Name</th>
			                <th>Date</th>
			            </tr>
			         </thead>
			         @foreach($app as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{$r->com_name}}</a></td>
			    		<td><a style="text-decoration:none;" href="#">{{$r->ads_name}}</a></td>
			    		<td><span>{{ucwords($r->birey_adi)." ". ucwords($r->birey_soyadi)}}</span></td>
			    		<td><span>{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
			</div>
		</div>
	</div>
</div>




<script type="text/javascript">
	pageSetUp();
	var pagefunction = function() {
	    $("#sortable1, #sortable2").sortable({
	        handle: '.handle',
	        connectWith: ".todo",
	        update: countTasks
	    }).disableSelection();
		$('.todo .checkbox > input[type="checkbox"]').click(function () {
		    var $this = $(this).parent().parent().parent();
		
		    if ($(this).prop('checked')) {
		        $this.addClass("complete");
		
		        // remove this if you want to undo a check list once checked
		        //$(this).attr("disabled", true);
		        $(this).parent().hide();
		
		        // once clicked - add class, copy to memory then remove and add to sortable3
		        $this.slideUp(500, function () {
		            $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
		            $this.remove();
		            countTasks();
		        });
		    } else {
		        // insert undo code here...
		    }
		
		})
		// count tasks
		function countTasks() {
		
		    $('.todo-group-title').each(function () {
		        var $this = $(this);
		        $this.find(".num-of-tasks").text($this.next().find("li").size());
		    });
		
		}
	pagefunction();
</script>
@stop