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
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="well well display-inline">
				<h3 class="txt-color-red">Lastest ADS</h3>
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

@stop