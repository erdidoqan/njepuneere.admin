@extends('layouts.master')
@section('content')

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> Firstly..You have to create a company.
</div>

    <div class="row setup-content" id="step-1">
        <div class="col-xs-10">
              <div class="container">    
        <div id="loginbox" class="mainbox col-md-11">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title">Create Employer</div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >
                         @if($errors->has('email'))
                            @foreach($errors->get('email') as $message)
                            <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <span>This email already exists</span>
                                    </div>
                            @endforeach
                        @endif
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         {{ Form::open(array('url' => 'sirketkayit', 'class'=>'form-horizontal','id'=>'smart-form-register')) }}
        <div class="col-xs-6">
              <!-- Text input-->
              <legend>Authority Person Information</legend>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Name:*</label>
                <div class="col-sm-9">
                  {{ Form::text('name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Surname:*</label>
                <div class="col-sm-9">
                  {{ Form::text('sname', '', array('class' => 'form-control input-sm', 'placeholder' => 'Surname')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
              <label class="col-sm-3 control-label" for="textinput">Gender:</label>
                <div class="col-sm-9">
                  {{ Form::label('male','Male') }}
                  {{ Form::radio('gender','Male','',array('id'=>'Male')) }}
                  {{ Form::label('female','Female') }}
                  {{ Form::radio('gender','Female','',array('id'=>'Female')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Birthday:</label>
                <div class="col-sm-9">
                  <div class="input-group">
                    {{ Form::text('birthday', '', array('class' => 'form-control input-sm', 'data-mask' => '99/99/9999', 'data-mask-placeholder' => '-')) }}
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Phone:*</label>
                <div class="col-sm-9">
                  {{ Form::text('phone', '', array('class' => 'form-control input-sm', 'placeholder' => 'Contact Phone')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Email:*</label>
                <div class="col-sm-9">
                  {{ Form::text('email', '', array('class' => 'form-control input-sm', 'placeholder' => 'Email')) }}
                </div>
              </div>
      </div>
      <div class="col-xs-6">
              <legend>Company Information</legend>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Name:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Nipt:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_nipt', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Nipt')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Sector:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_sector', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Sector')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Employees:*</label>
                <div class="col-sm-8">
                  {{ Form::text('nr_emp', '', array('class' => 'form-control input-sm', 'placeholder' => 'Number of Employees')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Zip Code:*</label>
                <div class="col-sm-8">
                  {{ Form::text('zip_code', '', array('class' => 'form-control input-sm', 'placeholder' => 'Zip Code')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Country:*</label>
                <div class="col-sm-8">
                  {{ Form::text('country', '', array('class' => 'form-control input-sm', 'placeholder' => 'Country')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">City:*</label>
                <div class="col-sm-8">
                  {{ Form::text('city', '', array('class' => 'form-control input-sm', 'placeholder' => 'City')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Web Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('web_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Web Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Fax Number:*</label>
                <div class="col-sm-8">
                  {{ Form::text('fax', '', array('class' => 'form-control input-sm', 'placeholder' => 'Fax Number')) }}
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
            {{ Form::close() }}
        </div>
        </div>                     
      </div>  
        </div>


    </div>

    
        </div>
    </div>
    
                   
</div>
</body>

<script type="text/javascript">
    
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    
    $(document).ready(function() {
      
      pageSetUp();
      
      var $registerForm = $("#smart-form-register").validate({

      // Rules for form validation
      rules : {
        name : {
          required : true
        },
        sname : {
          required : true
        },
        email : {
          required : true,
          email : true
        },
        pass : {
          required : true,
          minlength : 3,
          maxlength : 20
        },
        com_name : {
          required : true,
        },
        com_nipt : {
          required : true,
        },
        com_sector : {
          required :true,
        },
        nr_emp : {
          required : true,
        },
        com_add :{
          required : true,
        },
        zip_code : {
          required : true,
        },
        country : {
          required : true,
        },
        city : {
          required : true,
        },
        web_add : {
          required : true,
        },
        fax : {
          required : true,
        }
      },

      // Messages for form validation
      messages : {
        name : {
          required : '<small class="text-danger" style="margin-left:145px;">Please enter your name</small>'
        },
        sname : {
          required : '<small class="text-danger" style="margin-left:145px;">Please enter your Surname</small>'
        },
        email : {
          required : '<small class="text-danger" style="margin-left:145px;">Please enter your email address</small>',
          email : '<small class="text-danger" style="margin-left:145px;">Please enter a VALID email address</small>'
        },
        pass : {
          required : '<small class="text-danger" style="margin-left:145px;">Please enter your password</small>'
        },
        com_name : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company Name</small>'
        },
        com_nipt : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company NIPT</small>'
        },
        com_sector : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company Sector</small>'
        },
        nr_emp : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Employees Numbers</small>'
        },
        com_add : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company Address</small>'
        },
        zip_code : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Zip Code</small>'
        },
        country : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Country</small>'
        },
        city : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your City</small>'
        },
        web_add : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company Web Address</small>'
        },
        fax : {
          required : '<small class="text-danger" style="margin-left:190px;">Please enter your Company Fax Numbers</small>'
        }
      },

      // Do not change code below
      errorPlacement : function(error, element) {
        error.insertAfter(element.parent());
      }
    });
    
    
      
    })

    </script>


@stop