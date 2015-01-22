<!DOCTYPE html>
<html lang="en">
  <head>
	@include('partials/header')
	@include('partials/scripts')
  </head>
  <body style="background: url('/img/bg.jpg');background-color: transparent;background-repeat: no-repeat;background-position: center;background-size: cover;">
    @yield('content')
  </body>
</html>

