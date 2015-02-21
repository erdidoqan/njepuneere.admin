@extends('layouts.master')
@section('content')

<div class="container">
  <div class="row" id="user">
    <div class="col-sm-8">
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
      <div class="well display-inline" style="width:770px;">
      <a href="/jobs" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back to all jobs</a>
<h3 class="text-danger"><strong>{{ucwords($adsInfo->com_name)}}</strong>'s Ads</h3>
      <div class="right">
            <button id="enable" class="btn btn-default">enable / disable</button>
      <div class="btn-group">
              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                <i class="fa fa-gear fa-lg"></i>  <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="/all_ins/profile_ins/{{$adsInfo->user_id}}">Company Profile</a></li>
                <li><a href="/logo-update/{{$adsInfo->user_id}}">Update Company Logo</a></li>
                <li class="divider"></li>
                <li><a href="#"> <span class="text-primary">Edit Job</span></a></li>
                <li class="divider"></li>
                <li><a href="#AdsDel" data-toggle="modal"> <span class="text-danger">Delete Ads</span></a></li>
              </ul>
          </div>
      </div>
<div class="panel panel-fixed panel-primary">

  <div class="panel-body">
<div class="message"></div>
      <div class="col-sm-12">
      <div class="col-sm-6">
        <h1 class="text-danger"><b href="#" id="com_name" data-type="text" data-pk="{{ $adsInfo->id }}" data-title="Enter Job Title"> {{ucwords($adsInfo->com_name)}}</b></h1>
        



        <h6 href="#" id="ads_name" data-type="text" data-pk="{{ $adsInfo->id }}" data-title="Enter Job Title">{{ucwords($adsInfo->ads_name)}}</h6>
            
            </div>
            <div class="col-sm-6">
               <a href="/logo-update/{{$adsInfo->user_id}}"> <img src="{{User::$img_sirket_src."".$adsInfo->logo}}" alt="post img" class="pull-right img-responsive img-thumbnail" style="width:200px; height=150px; "></a>
      </div>
    </div>
  </div>
  </div>

  <div class="panel panel-fixed panel-primary">
    <div class="panel-body">
      <div class="col-sm-12">
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Job Description</h5><br>
              <div id="kutu">
                <div id="desc">
                    <p>{{$adsInfo->job_desc}}</p>
                    <div class="note">
                      For edit, just click.  
                    </div>
                </div>

                <div id="desc-form" style="display:none;">
                    <form action="/job/desc/{{$adsInfo->id}}" method="post">
                      <div class="right">
                        <button type="submit" class="btn btn-primary">save</button>
                      </div>

                      <textarea name="job_desc" class="ckeditor" rows="10" cols="80">
                        {{$adsInfo->job_desc}}
                      </textarea>
                    </form>
                </div>
              </div>
<script type="text/javascript">
  
$(document).ready(function(){

  $('#desc').click(function() {
    $('#desc-form').show();
    $('#desc').hide(); 
  });

  $('*').click(function (e) {
    if (!$(e.target).is('#kutu') && !$(e.target).is('#kutu *')) {
             $('#desc-form').hide();
             $('#desc').show();
        }



  });
});
</script>

            <hr>
  
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Required Qualifications</h5><br>
                <div id="kutu-qua">
                  <div id="qua">
                      <p>{{$adsInfo->qua}}</p>
                      <div class="note">
                      For edit, just click.  
                    </div>
                  </div>

                  <div id="qua-form" style="display:none;">
                    <form action="/job/qua/{{$adsInfo->id}}" method="post">
                      <div class="right">
                        <button class="btn btn-primary">save</button>
                      </div>
                      <textarea name="qua" class="ckeditor" rows="10" cols="80">
                        {{$adsInfo->qua}}
                      </textarea>
                    </form>
                  </div>
                </div>
<script type="text/javascript">
  
$(document).ready(function(){

  $('#qua').click(function() {
    $('#qua-form').show();
    $('#qua').hide(); 
  });

  $('*').click(function (e) {
    if (!$(e.target).is('#kutu-qua') && !$(e.target).is('#kutu-qua *')) {
             $('#qua-form').hide();
             $('#qua').show();
        }



  });
});
</script>
            <hr>

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
                      <p id="bus_area" data-type="text" data-pk="{{ $ads->id }}"> {{$ads->bus_area}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Position</label>
                    <div class="col-sm-6">
                      <p id="position" data-type="text" data-pk="{{ $ads->id }}"> {{$ads->position}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Working Style</label>
                    <div class="col-sm-6">
                      <p id="working_style" data-type="text" data-pk="{{ $ads->id }}">{{$ads->working_style}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Experience</label>
                    <div class="col-sm-6">
                      <p id="exp" data-type="text" data-pk="{{ $ads->id }}">{{$ads->exp}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Education Degre</label>
                    <div class="col-sm-6">
                      <p id="degree" data-type="text" data-pk="{{ $ads->id }}">{{$ads->degree}}</p>
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
                      <p>{{Carbon::createFromTimestamp(strtotime($adsInfo->created_at))->diffForHumans()}}</p>
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
    </div>

    <div class="col-sm-4" id="side">
    @if($adsInfo->active == 1)
      <div class="well display-inline bg-color-green text-center" style="width:340px;">
          <h1 class="txt-color-white">Active</h1> 
      </div>
      @else
      <div class="well display-inline bg-color-red text-center" style="width:340px;">
          <h1 class="txt-color-white">Passive</h1>
      </div>
      @endif

    </div>


    </div>
    <div class="col-sm-4" id="side-alt">
      <div class="well display-inline" style="width:340px;">
      <h5 class="text-danger">{{ucwords($adsInfo->com_name)}}'s <small>({{ucwords($adsInfo->ads_name)}}),</small> Applied List</h5>
      
      @if($app->count())
          <table class="table table-hover">
              <thead>
                    <tr>
                      <th>Name & Surname</th>
                      <th>Date</th>
                  </tr>
                 </thead>
                 @foreach($app as $r)
               <tbody>   
              
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


      </div>
    </div>

    

  </div>

<div class="container">
  <div class="row">
            <div id="inbox">
          <div class="fab btn-group show-on-hover dropup">
              <div data-toggle="tooltip" data-placement="left" title="Settings" style="margin-left: 42px;">
          <button type="button" class="btn btn-primary btn-io dropdown-toggle" data-toggle="dropdown">
            <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x fab-backdrop"></i>
                <i class="fa fa-plus fa-stack-1x fa-inverse fab-primary"></i>
                <i class="fa fa-cog fa-stack-1x fa-inverse fab-secondary"></i>
            </span>
          </button></div>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="/jobs/job/passive/{{$adsInfo->id}}" rel="tooltip" data-placement="left" title="Passive"><i class="fa fa-remove"></i></a></li>
            <li><a href="/jobs/job/active/{{$adsInfo->id}}" rel="tooltip" data-placement="left" title="Active"><i class="fa fa-check"></i></a></li>
            <li><a href="#" rel="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a></li>
            <li><a href="#AdsDel" data-toggle="modal" rel="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash-o"></i></a></li>
          </ul>
        </div>
        </div>
  </div>
</div>

<div class="modal fade" id="AdsDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><b class="text-danger"> {{ucwords($adsInfo->com_name)}}</b>, {{ucwords($adsInfo->ads_name)}}</h4>
      </div>

        <div class="modal-body">
          <p>Are you sure you want to delete, <span class="text-danger">{{$adsInfo->ads_name}}</span>, job? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a href="/jobs/job/delete/{{$adsInfo->id}}" class="btn btn-danger">Delete Job</a>
          {{ Form::close() }}
        </div>


      </div>
    </div>
  </div>

<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<script type="text/javascript">
  
  $('.fab').hover(function () {
      $(this).toggleClass('active');
  });
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });



$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'pop';  

      $('#enable').click(function() {
        $('#user .editable').editable('toggleDisabled');
      }); 

      $('#com_name').editable({
        url: '{{ URL::route("quick_update") }}',
        type: 'text',
        name: 'com_name',
        title: 'Enter Company Name',
          validate: function(value) {
             if($.trim(value) == '') return 'This field is required';
          }
      });

      $('#ads_name').editable({
        url: '{{ URL::route("quick_update") }}',
        type: 'text',
        name: 'ads_name',
        title: 'Enter Job Title',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#job_desc').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'job_desc',
        title: 'Enter Business Area',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#bus_area').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'bus_area',
        title: 'Enter Business Area',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#position').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'position',
        title: 'Enter Position',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#working_style').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'working_style',
        title: 'Enter Working Style',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });
    
      $('#exp').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'exp',
        title: 'Enter Experience',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#degree').editable({
        url: '{{ URL::route("ads_update") }}',
        type: 'text',
        name: 'degree',
        title: 'Enter Degree',
            validate: function(value) {
                 if($.trim(value) == '') return 'This field is required';
            }
      });

      $('#user .editable').on('hidden', function(e, reason){
        if(reason === 'save' || reason === 'nochange') {
            var $next = $(this).closest('tr').next().find('.editable');
            if($('#autoopen').is(':checked')) {
                setTimeout(function() {
                    $next.editable('show');
                }, 300); 
            } else {
                $next.focus();
            } 
        }
   });
    
});


</script>


@stop