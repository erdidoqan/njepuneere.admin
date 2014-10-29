<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap core CSS -->
   {{HTML::style("css/bootstrap.css")}}
  {{HTML::style("css/bootstrap.css")}}
  {{HTML::style("css/style.css")}}
  {{HTML::style("css/blog.css")}}
    <!-- Add custom CSS here -->
    {{ HTML::style('css/blog-home.css') }}
    {{ HTML::style('css/blog-post.css') }}

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{ HTML::link('/', 'Erdi Laravel', array('class' => 'navbar-brand')) }}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
    @if(Auth::user())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ ucwords(Auth::user()->username) }} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="./admin">Admin Kontrolü</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="{{ URL::to('logout') }}">Çıkış</a></li>
          </ul>
        </li>
        @endif
        @if(!Auth::user())
        <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Giris Yap <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li>
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                        </li>
                     </ul>
                  </li>
        @endif
        <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Ara<b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="navbar-form navbar-left" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Ara" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button"> Git</button>
                                        </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        
                     </ul>
                  </li>
      </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

   <div class="container">
   <div id="blog" class="row"> 
                  <div class="col-sm-2 paddingTop20" style="margin-top:54px;">
                  <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> News</a></li>
                    <li><a href="javascript:;">Latest news</a></li>
                    <li><a href="javascript:;">Updates</a></li>
                    <li><a href="javascript:;">Training</a></li>
                    <li><a href="javascript:;">Nutrition</a></li>
                    <li><a href="javascript:;">Proteins</a></li>
                    <li><a href="javascript:;">Recipes</a></li>
                    <li><a href="javascript:;">Challenge</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
            </div>
            <div class="col-sm-9 paddingTop20" style="margin-top:54px;">
        @yield('content')
        </div>
        </div>
        
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
             <p>Copyright &copy; Erdi Company 2014 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->
</div>
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {{HTML::script("js/jquery-1.11.1.min.js")}}
  {{HTML::script("js/bootstrap.min.js")}}
  {{HTML::script("js/sekil.js")}}
  </body>
</html>