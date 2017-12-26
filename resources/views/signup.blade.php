@extends('layouts.default')

@section('head')
<link href="{{asset('css/signup.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="content">
    <div class="form-header-content">
        <h1> <span>NilgiriCollege</span> SignUp</h1>
        @if(count($errors)>0)
        <section class="alert alert-danger">
            <ul>
            @foreach( $errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </section>
        @endif
    </div>
    <div class="form-content">
        <div class="form-header-content">
            <p>Create Account</p>
        </div>
        <div class="form-main-content">
            <form action="{{ url('/auth/signup/submit')}}" method="post">
                {{ csrf_field() }}
                <input placeholder="Fullname" name="name" type="text" required="">

                <input placeholder="E-mail" name="username" type="email" required="">
                @if ($errors->has('username'))
                
                @endif
                <input  placeholder="Password" name="password" type="password" required="">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <input  placeholder="re-Password" name="re-password" type="password" required="">
                @if ($errors->has('re-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('re-pasword') }}</strong>
                </span>
                @endif
                <div class="remember">
                    <span class="remember-me"><input type="checkbox" />Remember Me</span>
                    <a class="forget-password" href="#">Forgot Password?</a>
                    <div class="clear"></div>
                </div>
                <input type="submit" value="Create Account">
            </form>
        </div>
        <div class="form-continue">
            <h4>Already a member? <a href="{{ config('init.baseurl')}}/auth/login">login</a></h4>
        </div>
    </div>
</div>
</div>
@endsection