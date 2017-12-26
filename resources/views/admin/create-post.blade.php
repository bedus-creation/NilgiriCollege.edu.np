@extends('layouts.admin')
@section('head')
<link href="{{asset('css/admin.css')}}" rel="stylesheet"/>
<link href="{{asset('css/admin/create-post.css')}}" rel="stylesheet"/>
<script type="text/javascript" src='{{ URL::to('tinymce/tinymce.min.js')}}'></script>

<script type="text/javascript" src='{{ URL::to('js/ajax-editor-send.js')}}'></script>

@endsection
@section('content')﻿
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert-danger">
    {{ $error }}
</div>
@endforeach
@endif
@if(Session::has('flash_message'))
<div class="alert-danger">
    {{ Session::get('flash_message') }}
</div>
@endif
<form class="form-group" action="{{URL::to('/admin/create-post/submit') }}" method="post">
    <select class="form-control" name="notice-option">
        <option value="1">This is notice</option>
        <option value="0">This is news !</option>
    </select> 
    <input type="file" id="file" name="files[]" multiple style="display:none">
    <input class="form-control" placeholder="Enter title" type="text" name="title"/>
    <textarea id="input" name='body'></textarea>
    {{ csrf_field()}}
    <input class="form-control btn-primary" style="float:left" type="submit" value="submit">
</form>
@endsection