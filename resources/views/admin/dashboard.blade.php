@extends('layouts.admin')

@section('head')
<link href="{{asset('css/admin.css')}}" rel="stylesheet"/>
@endsection

@section('content')
<div class="option">
    <a href="{{ URL('admin/create-post') }}">
        <i class="fa fa-file-text"></i><p>Create Post</p></a>
</div>
<div class="option">
    <a href="{{ URL('admin/all-post') }}">
        <i class="fa fa-database"></i><p>All Post</p></a>
</div>
<div class="option">
    <a href="{{ URL('admin/edit-post') }}">
        <i class="fa fa-edit"></i><p>Edit Post</p></a>
</div>
<div class="option">
    <a href="{{ URL('admin/all-post') }}">
        <i class="fa fa-remove"></i><p>Delete Post</p></a>
</div>
<div class="option">
    <a href="{{ URL('auth/logout') }}">
        <i class="fa fa-power-off"></i><p>logout</p></a>
</div>
@endsection