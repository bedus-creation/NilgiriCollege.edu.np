@extends('layouts.admin')

@section('head')
<link href="{{asset('css/admin.css')}}" rel="stylesheet"/>
<link href="{{asset('css/admin/all-post.css')}}" rel="stylesheet"/>
<script src="{{asset('js/ajax/pageSearch.js')}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="heading">
    <h1>Your Posts are here !</h1>
</div>
<div class="form-content" id="form-content">
    <form class="form">
        <input id="search-content" autocomplete="off" required="true" class="form-control search-content" type="text" placeholder="Enter keywords to search page...." />
        <!--<input id="search-input" class="form-control search-submit" type="button" value="search"/> -->
        <input id="base_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input id="base_url" type="hidden" name="url" value="<?php echo Config::get("init.baseurl"); ?>" />
    </form>
</div>
@if(Session::has('flash_message'))
<div class="clearfix"></div>
    <div class="alert-danger">
        {{ Session::get('flash_message') }}
    </div>
@endif
<div class="main-content" id='search-result'>
    @if(count($data)>0)
    <table class="table table-striped">
        <thead >
            <tr>
                <th>Date</th>
                <th>page Title</th>
                <th >publish</th>
                <th >edit</th>
                <th>delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->created_at }}</td>
                <td>{{ str_slug($item->title,' ')}} </td>
                <td class="publish"><a class="btn btn-primary" href="{{  URL('admin/action/publish')}}/{{$item->id}}"> {{ $publish=($item->publish==0)? "publish" : "Unpublish" }}</a></td>
                <td class="edit"><a href="{{URL('/admin/edit-post/')."/".$item->title}}">Edit</a></td>
                <td class="delete" id="del-id-{{ $item->id}}"><a class="btn btn-danger delete"href="{{  URL('admin/action/delete')}}/{{$item->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>You have not create a single post !</h1>
    @endif 
</div>
@endsection