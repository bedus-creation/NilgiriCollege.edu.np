@extends('layouts.admin')

@section('head')
<link href="{{asset('css/admin.css')}}" rel="stylesheet"/>
<link href="{{asset('css/admin/create-post.css')}}" rel="stylesheet"/>
<script type="text/javascript" src='{{ URL::to('tinymce/tinymce.min.js')}}'></script>
<script type="text/javascript" src='{{ URL::to('js/ajax-editor-send.js')}}'></script>

<script src="{{asset('js/ajax/pageSearch.js')}}" type="text/javascript"></script>
<link href="{{asset('css/admin/edit-post.css')}}" rel="stylesheet"/>
@endsection

@section('content')﻿
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert-danger">
    {{ $error }}
    @endforeach
    @endif
    @if(Session::has('flash_message'))
    <div class="alert-danger">
        {{ Session::get('flash_message') }}
        @if(Session::get('flash_message')=="NO posts ! The post may be removed")
        <div class="form-content" id="form-content">
            <form class="form">
                <input id="search-content" autocomplete="off" required="true" class="form-control search-content" type="text" placeholder="Enter keywords to search page...." />
                <!--<input id="search-input" class="form-control search-submit" type="button" value="search"/> -->
                <input id="base_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input id="base_url" type="hidden" name="url" value="<?php echo Config::get("init.baseurl"); ?>" />
            </form>
        </div>
        <div id='search-result'></div>
    </div>
</div>
@endif
@endif
@if(count($post)>0)
<script type="text/javascript">
        $(window).on('load', function () {
        tinymce.get('input').setContent('{!! $post[0]->body !!}');
        });
</script>
<form class="form-group" action="{{URL::to('/admin/edit-post/update') }}" method="post">
    <input type="hidden" name="id" value="{{$post[0]->id }}"/>
    <input type="file" id="file" name="files[]" multiple style="display:none">
    <input class="form-control" placeholder="Enter title" type="text" name="title" value="{{ str_slug($post[0]->title,' ') }}"/>
    <textarea id="input" name='body'></textarea>
    {{ csrf_field()}}
    <input class="form-control btn-primary" style="float:left" type="submit" value="You are updating Content !">
</form>
@endif
@endsection