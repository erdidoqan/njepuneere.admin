<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>
      @include('partials/nav')
        
            
<div class="container">
        <div class="col-sm-4" style="margin-top:30px;">
          @include('ilan/filter')
         </div>
         <div class="col-sm-8" style="margin-top:30px;">
          
          @yield('content')
         </div>
      
              </div>
      @include('partials/footer')
  </body>
</html>

