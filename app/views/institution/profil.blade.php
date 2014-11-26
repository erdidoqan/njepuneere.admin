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
        		<img src="{{User::$img_sirket_src."".$sirket->logo}}" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ><hr>
            <a href="/logo-update/{{$sirket->id}}">Update Logo</a>
			</div>
   			<div class="col-sm-6">
   				<div class="col-sm-5">
   					Company Name:
   				</div>
   				<div class="col-sm-7">
   					<strong onclick="toggleId()">{{ucwords($sirket->com_name)}}</strong>
            <div ID="id" style="display:none;">
              <form action="stdNewInfo.php?komut=upId&id=" method="post" class="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="epokaID" id="InputName" value="{{ucwords($sirket->com_name)}}">
                  </div>
              </form>
            </div>
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
   				<small>Last Updated Date:<br>{{$sirket->updated_at}} </small></strong><hr>
   			</div>
        <div class="col-sm-2">
          <a href="/all_ins/create-job/{{$sirket->id}}" class="btn btn-block btn-success">Create Job</a>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Company Logo</h4>
      </div>
       <div class="modal-body">
      {{ Form::open(array('url' => array('logo_up',$sirket->id),'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
             <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" >
              <span class="text-danger"><strong>Warning!</strong> Your photographs will be sent to the company you choose properly for (max.2 mb)</span>
            <img src="{{Auth::user()->logo}}" id="target-2" class="pfimg" ></a>
            </div>
            
            <div>
              <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new">Select Company Logo</span>
              <span class="fileinput-exists">Change</span>
              {{ Form::file('logo', '') }}
              </span>
              <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
              <button type="submit" class="btn btn-primary btn-sm fileinput-exists right">Upload</button>
            </div>
        </div>
        {{ Form::close() }}
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function toggleId() {
          // Get the DOM reference
          var contentId = document.getElementById("id");
          // Toggle 
          contentId.style.display == "block" ? contentId.style.display = "none" : 
        contentId.style.display = "block"; 
        }
</script>
@stop