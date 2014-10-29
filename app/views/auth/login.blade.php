@extends('layouts.admin')

@section('content')
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Log in with your email account</h1>
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
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>



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