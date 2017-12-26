@extends('layouts.login')

@section('head')
<link href="{{asset('css/login.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="content">
    <div class="form-header-content">
        <h1> <span>NilgiriCollege</span> login</h1>
        @if(Session::has('flash_message'))
        <section class="alert alert-danger">
            {{ Session::get('flash_message') }}
        </section>
        @endif
    </div>
    <div class="form-content">
        <div class="form-header-content">
            <p>Admin Login</p>
        </div>
        <div class="form-main-content">
            <form action="{{ url('/auth/login/submit')}}" method="post">
                {{ csrf_field() }}
                <input placeholder="E-mail" name="username" type="email" required="">
                <input  placeholder="Password" name="password" type="password" required="">
                <div class="remember">
                    <span class="remember-me"><input type="checkbox" name="remember"/>Remember Me</span>
                    <a class="forget-password" href="#">Forgot Password?</a>
                    <div class="clear"></div>
                </div>
                <input type="submit" value="Signin">
            </form>
        </div>
        <div class="form-continue">
            <h4>Not a member? <a href="{{ config('init.baseurl')}}/auth/signup">signup</a></h4>
        </div>
    </div>
</div>
</div>
@endsection