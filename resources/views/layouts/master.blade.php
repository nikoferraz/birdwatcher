<!doctype html>
<html>
  <head>
    <title>Birdwatcher - @yield('title')</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <meta charset='utf-8'>
    <link href='/css/birdwatcher.css' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
    @yield('appendStyle')
    </style>
    @yield('appendHead')
  </head>
  <body>
  <!-- If Session has flash message display flash message --> 
  @if(\Session::has('flash_message'))
    <div class='flash_message'>
      {{ \Session::get('flash_message') }}
    </div>
  @endif
  <!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-xs center" href="/">Birdwatcher</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active hidden-lg hidden-md hidden-sm"><a href="#">Birdwatcher<span class="sr-only">(current)</span></a></li> 
          <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">P1<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://p1.nicholasferraz.me">P1 Homepage</a></li>
            <li><a href="https://github.com/nikoferraz/p1">P1 GitHub</a></li>
          </ul>
          </li>
          <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="http://p2.nicholasferraz.me">P2<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://p2.nicholasferraz.me">P2 Homepage</a></li> 
            <li><a href="https://github.com/nikoferraz/p2">P2 GitHub</a></li>
          </ul>
          </li>
          <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/">P3<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/">P3 Homepage</a></li>
            <li><a href="https://github.com/nikoferraz/p3">P3 GitHub</a></li>
          </ul>
          </li> 
          <li><a href="#">P4</a></li> 
          @if(Auth::check())
            <li><a href='/birds/create'>Add a bird</a></li>
            <li><a href='/logout'>Log out</a></li>
          @else
            <li><a href='/login'>Log in</a></li>
            <li><a href='/register'>Register</a></li>
          @endif
        </ul>
      </div>
    </div>
    </nav>
    <div class="jumbotron">
    <h2>@yield('title')</h2>
    <section> 
      @yield('jumbotron')
    </section>
    </div>
    <section> 
      @yield('content')
    </section>
    <footer>
      &copy; {{ date('Y') }} Birdwatcher 
    </footer>
  </body>
</html>