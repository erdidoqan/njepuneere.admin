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
			<div class="well display-inline" style="width:1024px;">
      <a href="/users" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back to all users</a>
        <h3 class="text-danger"><strong>{{ucwords($user->adi)." ".ucwords($user->soyadi)}} </strong>, User Profile</h3>
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
			
      <div class="col-sm-3">
        		<img src="{{$user->pr_img}}" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ><hr>
            
			</div>
   			<div class="col-sm-7">
        		<div class="col-sm-5">
            		Name & Surname:
         		</div>
          		<div class="col-sm-7">
            		<strong>{{ucwords($user->adi)." ".ucwords($user->soyadi)}}</strong>
            	</div>
            	<div class="col-sm-5">
            		Email:
            	</div>
            	<div class="col-sm-7">
            		{{$user->email}}
            	</div>
            	<div class="col-sm-5">
            		Gender:
            	</div>
            	<div class="col-sm-7">
            		{{$user->cinsiyet}}
            	</div>
            	<div class="col-sm-5">
            		Birthday:
            	</div>
            	<div class="col-sm-7">
            		{{$user->d_tarihi}}
            	</div>
            	<div class="col-sm-5">
            		Location:
            	</div>
            	<div class="col-sm-7">
            		{{$user->sehir." / ".$user->ulke}}
            	</div>
            	<div class="col-sm-5">
            		Lastest Jobs:
            	</div>
            	<div class="col-sm-7">
            		{{$user->sonis}}
            	</div>
            	<div class="col-sm-5">
            		Situation:
            	</div>
            	<div class="col-sm-7">
            		{{$user->durum}}
            	</div>
            	<div class="col-sm-5">
            		Email Active:
            	</div>
            	<div class="col-sm-7">
            		@if($user->active == 1)
				      		<span class="text-success">Active</span>
				      @else
				      		<span class="text-danger">Passive</span>
				      @endif
            	</div>
			</div>     
   			<div class="col-sm-2">
   				<small>Creation Date:<br>{{$user->created_at}}  </small></strong><hr>
   			</div>
   			<div class="col-sm-2">
   				<small>Last Updated Date:<br>{{$user->updated_at}} </small></strong><hr>
   			</div>
        
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:1024px;">
				<h3 class="text-danger"><strong>{{ucwords($user->adi)." ".ucwords($user->soyadi)}}</strong>, Applicant Lists</h3>

      
			</div>
		</div>
	</div>
</div>


@stop