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
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="well well display-inline">
				<h3 class="txt-color-red">Lastest Applicant</h3>
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
			    		<td><span class="label label-primary">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->diffForHumans() }} </span></td>
			    	</tbody>
			    	@endforeach
				</table>
			@endif
			</div>
		</div>
<div class="row">
<article class="col-sm-12 col-md-12 col-lg-6">
<div class="jarviswidget jarviswidget-color-blue" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false">

				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->

				<header>
					<span class="widget-icon"> <i class="fa fa-check txt-color-white"></i> </span>
					<h2> ToDo's </h2>
					<!-- <div class="widget-toolbar">
					add: non-hidden - to disable auto hide

					</div>-->
				</header>

				<!-- widget div-->
				<div>
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<div>
							<label>Title:</label>
							<input type="text" />
						</div>
					</div>
					<!-- end widget edit box -->

					<div class="widget-body no-padding smart-form">
						<!-- content goes here -->
						<h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
						<ul id="sortable1" class="todo">
							<li>
								<span class="handle"> <label class="checkbox">
										<input type="checkbox" name="checkbox-inline">
										<i></i> </label> </span>
								<p>
									<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
									<span class="date">Jan 1, 2014</span>
								</p>
							</li>
						</ul>
						<h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
						<ul id="sortable2" class="todo">
							<li>
								<span class="handle"> <label class="checkbox">
										<input type="checkbox" name="checkbox-inline">
										<i></i> </label> </span>
								<p>
									<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
								</p>
							</li>
							<li>
								<span class="handle"> <label class="checkbox">
										<input type="checkbox" name="checkbox-inline">
										<i></i> </label> </span>
								<p>
									<strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small> (code review)</small>
									<span class="date">Nov 22, 2013</span>
								</p>
							</li>
							<li>
								<span class="handle"> <label class="checkbox">
										<input type="checkbox" name="checkbox-inline">
										<i></i> </label> </span>
								<p>
									<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
									<span class="date">Jan 1, 2014</span>
								</p>
							</li>
						</ul>

						<h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
						<ul id="sortable3" class="todo">
							<li class="complete">
								<span class="handle"> <label class="checkbox state-disabled" style="display:none">
										<input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
										<i></i> </label> </span>
								<p>
									<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
									<span class="date">Jan 1, 2014</span>
								</p>
							</li>
						</ul>

						<!-- end content -->
					</div>

				</div>
				<!-- end widget div -->
			</div>
			</article>
			</div>
		<div class="col-sm-6">
			<div class="well well display-inline">
				<h3 class="txt-color-red">Lastest Person</h3>
				<hr>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ADS name</th>
							<th>Institution</th>
							<th>Created Date</th>
							<th>Deadline</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mudur Araniyor</td>
							<td>Universiteti Beder</td>
							<td>5 days ago</td>
							<td>2 weeks from now</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well well display-inline">
				<h3 class="txt-color-red">Lastest Institution</h3>
				<hr>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ADS name</th>
							<th>Institution</th>
							<th>Created Date</th>
							<th>Deadline</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mudur Araniyor</td>
							<td>Universiteti Beder</td>
							<td>5 days ago</td>
							<td>2 weeks from now</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well well display-inline">
				<h3 class="txt-color-red">Lastest Apply</h3>
				<hr>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ADS name</th>
							<th>Institution</th>
							<th>Created Date</th>
							<th>Deadline</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mudur Araniyor</td>
							<td>Universiteti Beder</td>
							<td>5 days ago</td>
							<td>2 weeks from now</td>
						</tr>
					</tbody>
				</table>
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