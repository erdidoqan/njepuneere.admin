@extends('layouts.master')
@section('content')

<div class="container">
  <div style="width:820px;">
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <span>Error!</span> {{Session::get('error')}}
    </div>
    @endif

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <span class="text-info">Success!</span> {{Session::get('success')}}
    </div>
    @endif
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
      <a href="/all_ins" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back to all institution</a>
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
                <li><a href="#ComDel" data-toggle="modal"> <span class="text-danger">Delete Company</span></a></li>
              </ul>
          </div>
      </div>
			
      <div class="col-sm-4">
        		<img src="{{User::$img_sirket_src."".$sirket->logo}}" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ><hr>
            <a href="/logo-update/{{$sirket->id}}">Update Logo</a>
			</div>
   			<div class="col-sm-6">
        <div class="col-sm-5">
            Authorized:
          </div>
          <div class="col-sm-7">
            <strong onclick="toggleId()">{{ucwords($sirket->name)." ".ucwords($sirket->sname)}}</strong>
          </div>

   				<div class="col-sm-5">
   					Company Name:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->com_name}}
   				</div>
   				<div class="col-sm-5">
   					Company NIPT:
   				</div>
   				<div class="col-sm-7">
   					<code>-{{ucwords($sirket->com_nipt)}}</code>
   				</div>
   				<div class="col-sm-5">
   					Company Sector:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->com_sector)}}
   				</div>
   				<div class="col-sm-5">
   					Nr of Employee:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->nr_emp)}}
   				</div>
   				<div class="col-sm-5">
   					Company Address:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->com_add)}}
   				</div>
   				<div class="col-sm-5">
   					Company Zip Code:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->zip_code)}}
   				</div>
   				<div class="col-sm-5">
   					Country:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->country)}}
   				</div>
   				<div class="col-sm-5">
   					City:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->city)}}
   				</div>
   				<div class="col-sm-5">
   					Web Address:
   				</div>
   				<div class="col-sm-7">
   					-{{ucwords($sirket->web_add)}}
   				</div>
				        
   			</div>
   			<div class="col-sm-2">
   				<small>Creation Date:<br>{{$sirket->created_at}} <hr>
   			</div>
   			<div class="col-sm-2">
   				<small>Last Updated Date:<br>{{$sirket->updated_at}} <hr>
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
                        <th>Applicant</th>
                    </tr>
                 </thead>
                 @foreach($adsInfo as $r)
                 <tbody>   
                <td><a style="text-decoration: none;" href="/jobs/job/{{$r->id}}">{{$r->ads_name}}</a></td>
                <td><span class="text-danger">{{$r->work_place}}</span></td>
                <td><span class="text-warning">{{$r->pub_time}}</span></td>
                <td><span class="label label-info">{{$r->languages}} </span></td>
                <td><span>{{$r->created_at}} </span></td>
                <td><a style="text-decoration: none;" href="/applicant/{{$r->id}}" class="btn btn-xs btn-primary">Basvurulari Gor</a></td>
              </tbody>
              @endforeach
          </table>
        @endif
        {{$adsInfo->links()}}
			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="well display-inline" style="width:820px;">
        <h3 class="text-danger"><strong>{{ucwords($sirket->com_name)}}</strong>, Applicant Lists</h3>

        @if($app->count())
          <table class="table table-hover">
              <thead>
                    <tr><th>Institution Name</th>
                      <th>Jobs</th>
                      <th>Applicant's Name & Surname</th>
                      <th>Applicant's Date</th>
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


<div class="modal fade" id="ComDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">You want to delete <span class="text-danger">{{$sirket->com_name}}</span> institution ?</h4>
      </div>

        <div class="modal-body">
          {{ Form::open(array('url' => array('/delete/company', $sirket->id),'id' => 'login-form','class'=>'smart-form')) }}
          
          <fieldset>
                <section>
                  <div class="row">
                    <label class="label col col-2">Institution:</label>
                    <div class="col col-10">
                      <label class="input"> <i class="icon-append fa fa-institution"></i>
                        {{ Form::text('com_name', '', array('class' => 'form-control', 'placeholder' => 'Write a institution name')) }}
                      </label>
                    </div>
                  </div>
                </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete Institution</button>
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