@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
        <h3 class="text-danger"><strong>{{ucwords($sirket->com_name)}}</strong>, Company Profile</h3>
      <div class="right">
      <div class="btn-group">
              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                <i class="fa fa-gear fa-lg"></i>  <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Company Name</a></li>
                <li><a href="#">Edit Company</a></li>
                <li><a href="#">Edit Authortiy</a></li>
                <li class="divider"></li>
                <li><a href="#"> <span class="text-primary">Update Email & Password</span></a></li>
                <li class="divider"></li>
                <li><a href="#"> <span class="text-danger">Delete Company</span></a></li>
              </ul>
          </div>
      </div>
			
      <div class="col-sm-4">
				<a href="#" data-toggle="modal" data-target=".slacker-modal">
        		<img src="http://institutional.njepuneere.com/{{$sirket->logo}}" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ></a><hr>
			</div>
   			<div class="col-sm-6">
   				<div class="col-sm-5">
   					Company Name:
   				</div>
   				<div class="col-sm-7">
   					<strong>{{ucwords($sirket->com_name)}}</strong>
   				</div>
   				<div class="col-sm-5">
   					Company NIPT:
   				</div>
   				<div class="col-sm-7">
   					<strong><code>{{ucwords($sirket->com_nipt)}}</code></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Sector:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->com_sector)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Nr of Employee:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->nr_emp)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Address:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->com_add)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Zip Code:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->zip_code)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Country:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->country)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					City:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->city)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Web Address:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->web_add)}}</span></strong>
   				</div>
				        
   			</div>
   			<div class="col-sm-2">
   				<small>Creation Date:<br>{{$sirket->created_at}} </small></strong><hr>
   			</div>
   			<div class="col-sm-2">
   				<small>Last Updated Date:<br>{{$sirket->updated_at}} </small></strong>
   			</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
				<h3 class="text-danger"><strong>{{ucwords($sirket->com_name)}}</strong>, Job Lists</h3>

        @if($adsInfo->count())
          <table class="table table-hover">
              <thead>
                    <tr><th>Job Name</th>
                        <th>Job Place</th>
                        <th>Publish Date</th>
                        <th>Languages</th>
                        <th>Creation Date</th>
                    </tr>
                 </thead>
                 @foreach($adsInfo as $r)
                 <tbody>   
                <td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{$r->ads_name}}</a></td>
                <td><span class="text-danger">{{$r->work_place}}</span></td>
                <td><span class="text-warning">{{$r->pub_time}}</span></td>
                <td><span class="label label-info">{{$r->languages}} </span></td>
                <td><span>{{$r->created_at}} </span></td>
              </tbody>
              @endforeach
          </table>
        @endif
        {{$adsInfo->links()}}
			</div>
		</div>
	</div>
</div>


<div class="modal fade in slacker-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-slacker">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="myLargeModalLabel">Change Company Logo</h5>
      </div>
      <div class="modal-body">
        <div class="col-sm-8">
        
        {{ Form::open(array('url' => array('logo_up',$sirket->id),'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
             <div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 540px; height: 300px;">
					  	<span class="text-danger"><strong>Warning!</strong> Your photographs will be sent to the company you choose properly for (max.2 mb)</span>
					  <img src="http://institutional.njepuneere.com/{{$sirket->logo}}" class="pfimg"></a>
					  </div>
					  
					  <div>
					    <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new">Select Company Logo</span>
					    <span class="fileinput-exists">Change</span>
					    {{ Form::file('logo', '') }}
					    </span>
					    <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
					    <button type="submit" class="btn btn-primary btn-sm fileinput-exists">Upload</button>
					  </div>
				</div>

        </div>
        {{ Form::close() }}
               
      </div>
      
      	
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

@stop