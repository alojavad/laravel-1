@extends('layout.lnews')

@section('content')

    <?php
    include ('js/date_time.php');
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
    ?>
    <div style="margin:0px auto; width:400px;padding:5px;border:1px solid #ccc;background:#FFF9F9;">
        <div style="text-align:center; direction:rtl; font:bold 15px/22px tahoma; direction:rtl; color:#093;"><?php echo " امروز $day_name ۱۳$year_number/$month_number/$day_number"; ?></div><br />
        </div>
<div class="col-md-1">

</div>
<div class="col-md-5">
<br>
    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/') }}/tag">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="InputTitle">Title</label>
            <input type="text" class="form-control" id="InputTitle" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="InputType">Type</label>
            <select class="form-control" id="InputType" name="dep">
                <option value="1">خبری</option>
                <option value="2">ورزشی</option>
                <option value="3">تکنولوژی</option>
                <option value="4">اجتماعی</option>
            </select>
        </div>
        <div class="form-group">
            <label for="InputDesc">Description</label>
            <textarea class="form-control" id="InputDesc" name="descr"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <script>
        CKEDITOR.replace('desc');
    </script>
    <br>
    <br>
    <br>

</div>
<div class="col-md-6">

    @if ($tag!="")

    @foreach ($tag as $db)
    <br><br>
    <p>
        {{$db->title}}
    </p>

    <p>
        {{$db->descr}}
        <a href="{!! action('TagController@edit',$db->id) !!}">Update</a>
        &nbsp;
        <a href="{!! action('TagController@edit',$db->id) !!}">Delete</a>
    </p>
    <br>
    @endforeach
    @endif
</div>
@endsection