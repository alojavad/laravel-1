<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Javad Hajiyan Maleki">
    <meta name="description" content="سایت خبری ایران">
    <meta name="keywords" content="سایت خبری هایتر سایت ورزشی تکنولوژی جدید عکس خبر سوتی سلفی جدید   hightr  hightr.com">
	<title>Hightr| هایتر</title>
    <link rel="shortcut icon" href="{!! asset('/facicon.ico') !!}" type="image/x-icon">
	<link href="{!! asset('/css/bootstrap.css') !!}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- Button trigger modal -->
<nav class="navbar navbar-default">
<div class="container-fluid">

<div class="navbar-header">


    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>

    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        <div class="col-md-1"><img src="{!! asset('/facicon.ico')!!}"></div>
        <form>


            <div class="col-md-6 col-md-offset-1">

                <input type="search" class="form-control" name="email" value="" draggable="true" list="news" autocomplete="off">
                <datalist id="news">
                    @foreach ($lastk as $dd)
                    <option value="{!! $dd->title!!}">
                    @endforeach
                </datalist>
            </div>
            <div class="col-md-1"><button type="submit" class="btn btn-primary" style="width: 100%">Search</button></div>
        </form>
        <div class="col-md-2 col-md-offset-1">
            <!--
            <img src="{!! asset('/images/kh_fb.gif')!!}" alt="..." class="img-thumbnail" style="width: 50px;height: 50px;" >
            -->
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li><a href="{!! url('/auth/login') !!}">Login</a></li>
                <li><a href="{!! url('/auth/register') !!}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{!! Auth::user()->name !!} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{!! url('/') !!}">Home</a></li>
                        <li><a href="{!! url('/news/create') !!}">Add news</a></li>
                        <li><a href="{!! url('/tag') !!}">Tag</a></li>
                        <li><a href="{!! url('/laravel/laravel') !!}">Laravel</a></li>
                        <li><a href="{!! url('/auth/logout') !!}">Logout</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>







@yield('content')

</nav>

    <footer class="col-md-12">

        <div class="content  text-center">
            <p>Hightr is a trademark of Javad Hajiyan Maleki. Copyright © Javad Hajiyan Maleki.</p>
            <p ><a href="http://jackmcdade.com/">Design by Javad Hajiyan Maleki</a></p>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{!! asset('js/jquery-1.11.2.min.js') !!}" ></script>
<script src="{!! asset('js/bootstrap.js') !!}" ></script>
</body>
</html>
