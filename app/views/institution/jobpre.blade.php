@extends('layouts.master')
@section('content')

<div id="loginbox" class="mainbox col-md-12">     
    <div style="padding-top:30px" class="panel-body" >
        @if($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ implode('', $errors->all('<p class="error">:message</p>')) }}
            </div>
        @endif
        <div class="col-xs-8 alert alert-warning" style="margin-left:180px;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <p>Your ad will be displayed in this way</p>
        </div>
        <div class="col-xs-8" style="margin-left:180px;">
          <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Ads Preview</div>
            </div> 
            <div class="panel-body">
            
              <div class="col-sm-12">
                <div class="col-sm-6">
                <h2 class="text-danger"> {{$adsInfo->ads_name}}</h2>
                          <h6>{{$adsInfo->ref_code}}</h6>
                      </div>
                      <div class="col-sm-6">
                          <img src="{{User::$img_sirket_src."".$adsInfo->logo}}" alt="post img" class="pull-right img-responsive img-thumbnail" style="width:200px; height=150px; ">
                </div>
              </div>         
           
            </div>
            </div>
            <div class="panel panel-primary">
            <div class="panel-body">
            
              <div class="col-sm-12">
              <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Job Description</h5><br>
                <p> {{$adsInfo->job_desc}}</p><hr>
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Required Qualifications</h5><br>
                 <p> {{$adsInfo->qua}}</p><hr>
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Additional Information</h5>
                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Company Name</label>
                    <div class="col-sm-6">
                      <p>{{ $adsInfo->com_name }}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Business Area</label>
                    <div class="col-sm-6">
                      <p> {{$ads->bus_area}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Position</label>
                    <div class="col-sm-6">
                      <p> {{$ads->position}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Working Style</label>
                    <div class="col-sm-6">
                      <p>{{$ads->working_style}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Experience</label>
                    <div class="col-sm-6">
                      <p>{{$ads->exp}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Education Degre</label>
                    <div class="col-sm-6">
                      <p>{{$ads->degree}}</p>
                    </div>
                </div>

                         <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Gender</label>
                    <div class="col-sm-6">
                      <p>{{$ads->gender}}</p>
                    </div>
                </div>

                        <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Number of Staff</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->number_of_staff}}</p>
                    </div>
                </div>

                        <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Release Date</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->rel_date}}</p>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Deadline</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->pub_time}}</p>
                    </div>
                </div>

                @if ($adsInfo->disabled=0)
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="textinput">Disabled</label>
                      <div class="col-sm-6">
                        <p></p>
                      </div>
                  </div>
                @endif

              </div>            
           
            </div>
            </div>

        </div>
    <!-- Text input-->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary btn-sm">Save and Continue  <span class="glyphicon glyphicon-forward"></span></button>
          </div>
        </div>
      </div>
    </div>               
</div>  



@stop