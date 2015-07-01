@extends('app')

@section('content')
<div class="container-fluid">

<div class="row">
    <ul class="nav nav-tabs nav-pills navbar-brand">
        <li><a href="#">صفحه نخست</a></li>
        <li><a href="news/create">درج خبر</a></li>
        <li><a href="isis">داعش</a></li>
        <li><a href="tell">مذاکرات</a></li>
        <li><a href="laravel/laravel">لاراول</a></li>
        <li><a href="https://www.google.com">google</a></li>
        <li><a href="https://www.linkedin.com">linkedin</a></li>
        <li><a href="https://www.hotmail.com">hotmail</a></li>
        <li><a href="https://www.gmail.com">gmail</a></li>
        <li><a href="https://www.entekhab.com">انتخاب</a></li>
        <li><a href="https://www.varzesh3.com">varzesh3</a></li>
        <li><a href="https://www.instigram.com">instigram</a></li>
        <li><a href="forum">chat</a></li>
    </ul>
</div>


<div class="row">
    &nbsp;
</div>
<!-- vasat -->
<div class="row">

    <div class="col-md-6">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @if ($titr1!="")
                <div class="item active" style="height: 370px;width: 600px">
                    <a href="news/{!!$titr1->id!!}" target="_blank">
                    <img src="{!!$titr1->image!!}" alt="{!!$titr1->title!!}">
                    </a>
                    <div class="carousel-caption">
                        <a href="news/{!!$titr1->id!!}" target="_blank" style="color: red;font-size: 20px">
                        {!!$titr1->title!!}
                            </a>
                    </div>
                </div>
                @endif
                @foreach ($titr as $db)
                <div class="item" style="height: 370px;width: 600px">
                    <a href="news/{!!$db->id!!}" target="_blank">
                    <img src="{!!$db->image!!}" alt="{!!$db->title!!}">
                    </a>
                    <div class="carousel-caption">
                        <a href="news/{!!$db->id!!}" target="_blank" style="color: red;font-size: 20px">
                        {!!$db->title!!}
                            </a>
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
    </div>


    <div class="col-md-3">
        @if ($spec1 !="")
        <div class="image">
            <a href="news/{!!$spec1->id!!}" target="_blank">
            <img src="{!!$spec1->image!!}" style="width: 300px;height: 230px" alt="{!!$spec1->title!!}" class="img-thumbnail">
            <p  class="hh2">{!!$spec1->title!!}</p>
            </a>
        </div>
        @endif
        <div class="row">
            &nbsp;
        </div>

        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        @if ($spec2!="")
        <a href="news/{!!$spec2->id!!}" target="_blank">
        <div class="news_contentn"style="height: 100px">

            <img src="{!!$spec2->image!!}" style="width: 90px;height: 90px" alt="{!!$spec2->title!!}" class="img-thumbnail">
            <div style="width: 180;height: 90px;float: right">
                {!!$spec2->title!!}

            </div>

        </div>
            </a>
        @endif

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>




    </div>

    <div class="col-md-3">
        @if ($spec3 !="")
        <div class="image">
            <a href="news/{!!$spec3->id!!}" target="_blank">
                <img src="{!!$spec3->image!!}" style="width: 300px;height: 230px" alt="{!!$spec3->title!!}" class="img-thumbnail">
                <p  class="hh2">{!!$spec3->title!!}</p>
            </a>
        </div>
        @endif
        <div class="row">
            &nbsp;
        </div>

        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        @if ($spec4!="")
        <a href="news/{!!$spec4->id!!}" target="_blank">
        <div class="news_contentn"style="height: 100px">

            <img src="{!!$spec4->image!!}" style="width: 90px;height: 90px" alt="{!!$spec4->title!!}" class="img-thumbnail">
            <div style="width: 180;height: 90px;float: right">
                {!!$spec4->title!!}

            </div>

        </div>
            </a>
        @endif
        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>




    </div>







</div>




<!-- edame -->

<div class="row">
    @foreach ($best as $db)
    <div class="col-md-3">
        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        <a href="news/{!!$db->id!!}" target="_blank">
        <div class="news_contentn"style="height: 100px">

            <img src="{!!$db->image!!}" style="width: 90px;height: 90px" alt="{!!$db->title!!}" class="img-thumbnail">
            <div style="width: 180px;height: 90px;float: right">
                {!!$db->title!!}

            </div>

        </div>
            </a>

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>





    </div>
    @endforeach



</div>




<!-- akhar -->



<div class="row">
    <div class="col-md-3">
        <h2 style="text-align: center;color: #008000">سیاسی اقتصادی فرهنگی</h2>
        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        <div class="news_contentn">

            <div style="width: 100%; height: 100%;">
                @foreach ($lastk as $db)
                @if (($db->id %2)==0)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!}</a>

                </div>
                @endif
                @if (($db->id %2)==1)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!} </a>
                </div>
                @endif
                @endforeach



                <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
            </div>

        </div>

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>


    </div>





    <div class="col-md-3">
        <h2 style="color: #008000;text-align: center">ورزشی</h2>
        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        <div class="news_contentn">

            <div style="width: 100%; height: 100%;">
                @foreach ($lasts as $db)
                @if (($db->id %2)==0)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!}</a>

                </div>
                @endif
                @if (($db->id %2)==1)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!} </a>
                </div>
                @endif
                @endforeach



                <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
            </div>

        </div>

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>


    </div>

    <div class="col-md-3">
        <h2 style="color: #008000;text-align: center">تکنولوژی</h2>
        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        <div class="news_contentn">

            <div style="width: 100%; height: 100%;">
                @foreach ($lastt as $db)
                @if (($db->id %2)==0)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!}</a>

                </div>
                @endif
                @if (($db->id %2)==1)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!} </a>
                </div>
                @endif
                @endforeach



                <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
            </div>

        </div>

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>


    </div>

    <div class="col-md-3">
        <h2 style="color: #008000;text-align: center">اجتماعی</h2>
        <div class="t_curvn">
            <img src="{!! asset('/images/inn_t_r_box.gif')!!}" alt="..." class="fr_img">
            <img src="{!! asset('/images/inn_t_l_box.gif')!!}" alt="..." class="fl_img">


        </div>
        <div class="news_contentn">

            <div style="width: 100%; height: 100%;">
                @foreach ($lastso as $db)
                @if (($db->id %2)==0)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px;">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!}</a>

                </div>
                @endif
                @if (($db->id %2)==1)
                <div style="padding-bottom: 4px; text-align: justify; direction: rtl; padding-left: 4px; padding-right: 4px; background: rgb(237, 237, 237);">
                    <img src="{!! asset('/images/l_bolet.gif')!!}" style="padding-left: 1px;" alt="">
                    <a class="title4" href="news/{!!$db->id!!}" title="{!!$db->title!!}" target="_blank">{!!$db->title!!} </a>
                </div>
                @endif
                @endforeach



                <div class="wrapper" style="padding-left: 4px; padding-right: 4px;"></div>
            </div>

        </div>

        <div class="b_curvn" style="margin-bottom: 5px;">
            <img alt="" src="{!! asset('/images/inn_b_r_box.gif')!!}" class="fr_img">
            <img alt="" src="{!! asset('/images/inn_b_l_box.gif')!!}" class="fl_img">
            <div class="wrapper"></div>
        </div>


    </div>








</div>
</div>








@endsection
