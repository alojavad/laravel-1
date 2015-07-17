<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Javad Hajiyan Maleki">
    <meta name="description" content="سایت خبری ایران">
    <meta name="keywords" content="سایت خبری هایتر سایت ورزشی تکنولوژی جدید عکس خبر سوتی سلفی جدید   hightr  hightr.com">
    <meta name="_token" content="{!! csrf_token() !!}"/>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>

    <script>

        function showResult(str) {


            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }

            xmlhttp.open("GET","news/search?q="+str,true);
            xmlhttp.send();
        }
    </script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>



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
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="col-md-6 col-md-offset-2">

                <input type="text" class="form-control" name="search" draggable="true" dir="rtl" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>

            </div>
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
<script src="{!! asset('js/analytics.js') !!}" ></script>
</body>
</html>
