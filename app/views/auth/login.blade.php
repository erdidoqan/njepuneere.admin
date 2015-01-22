@extends('layouts.admin')

@section('content')


<div id="login" class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title"><img src="/img/logo.png" class="logo-img"></h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-xs-6">
                  <div class="well">
                      {{ Form::open(array('url' => 'login', 'id'=>'login-form')) }}
                      <div class="form-group">
                          <label for="email" class="sr-only">email</label>
                          {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'name@njepuneere.com')) }}
                          
                      </div>
                      <div class="form-group">
                          <label for="key" class="sr-only">Password</label>
                          {{ Form::password('password', array('class' => 'form-control','id'=>'key' ,'placeholder' => 'password')) }}
                      </div>
                      <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    {{Form::close()}}
                  </div>
              </div>
              <div class="col-xs-6">
                  <p class="lead">Wellcome to <span class="text-primary">nje</span><span class="text-success">pune</span><span class="text-primary">ere</span></p>
                  <ul class="list-unstyled" style="line-height: 2">
                      <li><span class="fa fa-check text-success"></span> See all CVs</li>
                      <li><span class="fa fa-check text-success"></span> Fastly</li>
                      <li><span class="fa fa-check text-success"></span> Save your joblist</li>
                      <li><span class="fa fa-check text-success"></span> checkout all institution</li>
                      <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>


<script type="text/javascript">
    
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    
    $(document).ready(function() {
      
      pageSetUp();
      
      var $registerForm = $("#login-form").validate({

      // Rules for form validation
      rules : {
        email : {
          required : true,
          email : true
        },
        password : {
          required : true,
          minlength : 3,
          maxlength : 20
        }
      },

      // Messages for form validation
      messages : {
        email : {
          required : '<p class="text-danger">Please enter your email address</p>',
          email : '<p class="text-danger">Please enter a VALID email address</p>'
        },
        password : {
          required : '<p class="text-danger">Please enter your password</p>'
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