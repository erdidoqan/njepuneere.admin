@extends('layouts.master')
@section('content')

<div id="loginbox" class="mainbox col-md-12">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Business Profile</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                            </div>
                        @endif
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         {{ Form::open(array('url' => 'sirketkayit','class'=>'form-horizontal','id'=>'smart-form-register')) }}
                         
        <div class="col-xs-6">
              <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Wanted Position Title
                	<a class="btn btn-info btn-xs"  data-toggle="tooltip" data-placement="right" title="İlanın uygun adaylara e-posta ile bildirilmesi için Aranan Pozisyon Adı seçimlerinizi listeden yapılması gerekmektedir.">
                		<span class="glyphicon glyphicon-info-sign" ></span>
                	</a></label>
                <div class="col-sm-8">
                	
                 {{Form::position()}}
                </div>
              </div>			
									
										
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Sector</label>
                <div class="col-sm-8">
                 <!--{{Form::select('sector', DB::table('Ads')->lists('sector','id'), null, ['class' => 'form-control','multiple'=>'']);}}-->
                 {{Form::sector() }}
                </div>
              </div>	
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Business Area</label>
                <div class="col-sm-8">
                 {{Form::area()}}
                </div>
              </div>	
              <!-- Text input-->

              
      </div>
      <div class="col-xs-6">
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Position
                	<a class="btn btn-info btn-xs"  data-toggle="tooltip" data-placement="right" title="İlanın uygun adaylara e-posta ile bildirilmesi için Aranan Pozisyon Adı seçimlerinizi listeden yapılması gerekmektedir.">
                		<span class="glyphicon glyphicon-info-sign" ></span>
                	</a></label>
                <div class="col-sm-8">
                 {{Form::pos()}}
                </div>
              </div>
              <!-- Text input-->
               <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Working Style</label>
                <div class="col-sm-8">
                 {{Form::style()}}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Experience</label>
                <div class="col-sm-8">
                 {{Form::exp()}}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Education Degree</label>
                <div class="col-sm-8">
                 {{Form::degree()}}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Gender</label>
                <div class="col-sm-8">
                 {{Form::gender()}}
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

@stop