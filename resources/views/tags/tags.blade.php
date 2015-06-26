@extends('layout.lnews')

@section('content')
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

    <!--
    {{Form::open(['action'=>'TagController@store','class'=>'form form-horizontal','style'=>'margin-top:50px'])}}
    <div class="form-group">
        {{ Form::label('title','Title:',['class'=>'col-sm-3 control-label']) }}
        <div class="col-sm-8">
            {{ Form::text('title',Input::old('title'),['class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('text','Deasription:',['class'=>'col-sm-3 control-label']) }}
        <div class="col-sm-8">
            {{ Form::textarea('body',Input::old('title'),['class'=>'form-control']) }}
        </div>
    </div>

    <div class="text-center">
        {{Form::submit('Post Your Tags',['class'=>'btn btn-default'])}}
    </div>
    {{Form::close()}}
    -->
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
@stop