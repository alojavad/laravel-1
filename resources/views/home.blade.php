@extends('app')

@section('content')





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

<!--
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<div role="tabpanel">



<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">خبری</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ورزشی</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">تکنولوژی</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">اجتماعی</a></li>

        <li >&nbsp;</li>
        <li><a href="{!! url('/') !!}">Home</a></li>
        <li >&nbsp;</li>
        <li><a href="{!! url('/tag') !!}">Tag</a></li>
        <li >&nbsp;</li>
        <li><a href="{!! url('/news/create') !!}">Add News</a></li>
        <li >&nbsp;</li>
        <li><button type="button" class="btn btn-lg btn-info" onclick="location.href='{!! route("laravel1") !!}'" >laravel(persian)</button></li>
        <li >&nbsp;</li>
    <!--
        <li ><button type="button" class="btn btn-lg btn-info" ><a href="{!!URL::to('forum')!!}">Forum</a> </button></li>
        <li >&nbsp;</li>
        </ul>
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





<div class="col-md-12"  style="align-content: center;">

<div class="col-md-4" style="float: left">



<div class="col-md-4" style="float: left">
<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
    </div>
</div>

<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;">
        <a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
</div>
<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;">
        <a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
</div>
<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;">
        <a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
</div>
<div class="wrapper">

</div>

<div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
<div class="wrapper"> </div>
<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;">
        <a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
</div>
<div class="wrapper"></div>


<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;">
        <a href="{!! url('/') !!}" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
</div>
    <div class="c_tabs">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @if ($specss!="")
                <div class="item active">
                    <a href="/news/{!!$specss->id!!}" target="_blank">
                    <img src="{!! $specss->image !!}" alt="{!! $specss->title !!}"></a>
                    <div class="carousel-caption">
                        {!! $specss->title !!}
                    </div>
                </div>
                @endif
                @foreach ($specs as $db)
                <div class="item">
                    <a href="/news/{!!$db->id!!}" target="_blank">
                    <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                    <div class="carousel-caption">
                    {!! $db->title !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <div class="c_tabs_title title_tabs" dir="rtl">
        <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
        <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
        <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
        <div class="wrapper"></div>
    </div>
    <div class="c_tabs_content content_tabs">
        <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
            <div style="width: 100%; height: 100%;">
                @if ($bests!="")
                @foreach ($bests as $db)
                @if (($db->id %2)==0)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                </div>
                @endif
                @if (($db->id %2)==1)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                </div>
                @endif
                @endforeach
                @endif



                <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
            </div>
        </div>




    </div>
    <div class="b_curv" style="margin-bottom: 5px;">
        <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
        <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
        <div class="wrapper"></div>
    </div>
</div>

<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
    </div>
</div>
<div class="wrapper"></div>

<div class="c_tabs">
    <div class="c_tabs_title title_tabs" dir="rtl">
        <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
        <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

        <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
        <div class="wrapper"></div>
    </div>

    <div class="c_tabs_content content_tabs jquery_odd_background">
        <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
            @if ($lasts!="")
            @foreach ($lasts as $db)
            @if (($db->id %2)==0)

            <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
            </div>
            @endif
            @if (($db->id %2)==1)

            <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
            </div>
            @endif
            @endforeach
            @endif



        </div>






    </div>
    <div class="b_curv" style="margin-bottom: 5px;">
        <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
        <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
        <div class="wrapper"></div>
    </div>
</div>

<div class="ads" style="display:none;">
    <div style="padding-bottom:5px;"><a href="/" target="_blank">
            <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
    </div>
</div>
<div class="wrapper"></div>
</div>
<div class="adv_col">



    <div class="wrapper"></div>
</div>
</div>


<div class="col-md-4" style="float: left">



<div class="col-md-4" style="float: left">
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="wrapper">

    </div>

    <div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
    <div class="wrapper"> </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="wrapper"></div>


    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="c_tabs">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @if ($speckk!="")
                <div class="item active">
                    <a href="/news/{!!$speckk->id!!}" target="_blank">
                        <img src="{!! $speckk->image !!}" alt="{!! $speckk->title !!}"></a>
                    <div class="carousel-caption">
                        {!! $speckk->title !!}
                    </div>
                </div>
                @endif
                @foreach ($speck as $db)
                <div class="item">
                    <a href="/news/{!!$db->id!!}" target="_blank">
                        <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                    <div class="carousel-caption">
                        {!! $db->title !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="c_tabs_title title_tabs" dir="rtl">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
            <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
        <div class="c_tabs_content content_tabs">
            <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
                <div style="width: 100%; height: 100%;">
                    @if ($bestk!="")
                    @foreach ($bestk as $db)
                    @if (($db->id %2)==0)
                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                    </div>
                    @endif
                    @if (($db->id %2)==1)
                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                    </div>
                    @endif
                    @endforeach
                    @endif



                    <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
                </div>
            </div>




        </div>
        <div class="b_curv" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>

    <div class="c_tabs">
        <div class="c_tabs_title title_tabs" dir="rtl">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
            <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>

        <div class="c_tabs_content content_tabs jquery_odd_background">
            <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
                @if ($lastk!="")
                @foreach ($lastk as $db)
                @if (($db->id %2)==0)

                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                </div>
                @endif
                @if (($db->id %2)==1)

                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                </div>
                @endif
                @endforeach
                @endif



            </div>






        </div>
        <div class="b_curv" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>
</div>
<div class="adv_col">



    <div class="wrapper"></div>
</div>
</div>


<div class="col-md-4" style="float: left">



<div class="col-md-4" style="float: left">
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="wrapper">

    </div>

    <div class="ads" style="display:none;">  	<div style="padding-bottom:5px;"><a href="/" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div> </div>
    <div class="wrapper"> </div>
    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="wrapper"></div>


    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;">
            <a href="{!! url('/') !!}" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a></div>
    </div>
    <div class="c_tabs">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @if ($spectt!="")
                <div class="item active">
                    <a href="/news/{!!$spectt->id!!}" target="_blank">
                        <img src="{!! $spectt->image !!}" alt="{!! $spectt->title !!}"></a>
                    <div class="carousel-caption">
                        {!! $spectt->title !!}
                    </div>
                </div>
                @endif
                @foreach ($spect as $db)
                <div class="item">
                    <a href="/news/{!!$db->id!!}" target="_blank">
                        <img src="{!! $db->image !!}" alt="{!! $db->title !!}"></a>
                    <div class="carousel-caption">
                        {!! $db->title !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="c_tabs_title title_tabs" dir="rtl">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
            <a href="#" class="c_tab1 active_tab" id="most_visited" style="width: 105px;">مهمترین عناوین روز</a>
            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
        <div class="c_tabs_content content_tabs">
            <div class="tab_p tab_page1 active_tab_p jquery_odd_background" style="display: block;">
                <div style="width: 100%; height: 100%;">
                    @if ($bestt!="")
                    @foreach ($bestt as $db)
                    @if (($db->id %2)==0)
                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">




                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="/news/{!!$db->id!!}" title="12:10 - 1394/03/23" target="_blank">{!! $db->title !!} </a>

                    </div>
                    @endif
                    @if (($db->id %2)==1)
                    <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                        <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                        <a class="title4" href="news/{!!$db->id!!}" title="11:22 - 1394/03/23" target="_blank">{!! $db->title !!} </a>
                    </div>
                    @endif
                    @endforeach
                    @endif



                    <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
                </div>
            </div>




        </div>
        <div class="b_curv" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/#" target="_blank"><img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>

    <div class="c_tabs">
        <div class="c_tabs_title title_tabs" dir="rtl">
            <img alt="" src="{!! asset('/images/r_sar.gif')!!}" class="fr_img">
            <a href="#" class="c_tab1 active_tab" id="latest">آخرین اخبار</a>

            <img alt="" src="{!! asset('/images/sar.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>

        <div class="c_tabs_content content_tabs jquery_odd_background">
            <div class="" id="latest_content"> <!-- c_tabs_content1 active_content  -->
                @if ($lastt!="")
                @foreach ($lastt as $db)
                @if (($db->id %2)==0)

                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="12:44 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                </div>
                @endif
                @if (($db->id %2)==1)

                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="12:42 - 1394/03/23" target="_blank">{!! $db->title !!}</a>
                </div>
                @endif
                @endforeach
                @endif



            </div>






        </div>
        <div class="b_curv" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>
    </div>

    <div class="ads" style="display:none;">
        <div style="padding-bottom:5px;"><a href="/" target="_blank">
                <img alt="" style="width:219px;height:80px;border:0px;" src="{!! asset('/images/890_775.gif')!!}"></a>
        </div>
    </div>
    <div class="wrapper"></div>
</div>
<div class="adv_col">



    <div class="wrapper"></div>
</div>
</div>








</div>
</div>


</nav>




@endsection
