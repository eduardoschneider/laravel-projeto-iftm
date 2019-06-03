<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CRUD Demo</title>

  <!-- Fonts -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/summernote@0.8.11/dist/summernote.css">

  <style>
    body {
      font-family: 'Lato';
    }

    .fa-btn {
      margin-right: 6px;
    }
	
	.navbar {
		border: none !important;
		border-radius:0 !important;
		width:100%;
		height:250px;
		display:flex;
		align-items:center;
		justify-content:center;
		background: url("../../../bg.jpg") no-repeat center center;
		background-size:cover;
	}
	
	.navbar .login a {
		margin-top:15px;
		font-size:12px;
		color:white !important;
		text-shadow:0.5px 0.5px 2px black;
		background-color:#3fa6cc;
		padding:6px;
		width:80px;
		text-align:center;
		margin-right:28px;
		border-radius:9px;
	}
	
	.navbar .login a:hover {
		background-color:#297793 !important;

	}

	.navbar .options a {
		color:white !important;
		font-size:15px;
		text-shadow: 1px 1px 1px #000;
	}

	.logged a {
		
		font-size:16px;
		margin-top:5px;	
		float:left;
		color:white !important;
	}

	.navbar .logout a {
		font-size:11px;
		color:white !important;
		text-shadow:0.5px 0.5px 2px black;
		background-color:#a42323;
		padding:7px;
		margin-right:8px;
		border-radius:9px;
		margin-top:13px;
	}
	
	.navbar .logout a:hover {
		background-color:#770707 !important;

	}

	.logged, .logout {
		position:absolute;
		
		right:-700px;
}

  </style>
</head>

<body id="app-layout">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        <li class="login"><a href="{{ url('/') }}">Home</a></li>
        <li class="login"><a href="{{ url('/page') }}">Dados</a></li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav">
        <!-- Authentication Links -->
        @if (Auth::guest())
          <li class="login"><a href="{{ url('/login') }}">Login</a></li>
          <li class="login"><a href="{{ url('/register') }}">Registrar</a></li>
        @else
          <li class="logged">
            <a href="#">
              {{ Auth::user()->name }}
            </a>
		</li>
		<li class="logout">
			<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			  Logout
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		  </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.min.js"></script>
<script src="https://unpkg.com/summernote@0.8.11/dist/summernote.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
@include('sweet::alert')
<script>
  $(function() {
    window.App = {

      init: function() {
        this.timeago();
        this.summernote();
      },

      timeago: function() {
        $("time").timeago();
      },

      summernote: function() {
        $('textarea').summernote();
      }

    };

    App.init()
  });


</script>
</body>
</html>
