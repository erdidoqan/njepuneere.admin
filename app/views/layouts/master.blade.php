<!DOCTYPE html>
<html lang="en">
  <head>
  @include('partials/header')
  @include('partials/scripts')
  </head>
  <body>
  @include('partials/nav')
  @include('partials/aside')
  <div class="container" style="margin-left:210px;margin-top:70px;">
    @yield('content')
  </div>
    
  </body>
</html>

