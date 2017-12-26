@extends('layouts.default')

@section('head')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="content">
<div id="inner-wrapper">
    <section class="welcome">
        <div class="welcome-inner">
            <h2>Welcome to <span style="color: #1b6d85;">Nilgiri College</span></h2>
            <i class="fa fa-quote-left" ></i>
            We are delighted to introduce "Nilgiri College" a pure food technology 
            college established by the team of young and enthusiastic professional 
            and guided by renowned and experienced faculties with the clean objective
            of providing a top class education and practical exposure as an affordable
            fee, and is located at green city Itahari in quite pleasant and peaceful
            environment.
            
            <i class="fa fa-quote-right"></i>
        </div>
    </section>
    <section class='one-third'>
        <div class="circle">
            <td><i class="fa fa-user" ></i></td>
        </div>
        <h3>Grage a staff</h3>
        <p> Here we have qualified, experienced teachers and devoted teaching 
            professionals, Who always encourages student to learn new and work hard. </p>
    </section>
    <section class='one-third'>
        <div class="circle">
            <td><i class="fa fa-map-marker" ></i></td>
        </div>
        <h3>convenient Location</h3>
        <p>
            Nilgiri college is situated at at paschim line Itahari, opposite to khadya 
            godam. 
        </p>
    </section>
    <section class='one-third'>
        <div class="circle">
            <td><i class="fa fa-check-square-o" ></i></td>
        </div>
        <h3>Others </h3>
        <p>
            Other facilities like Internet, sports, participation in extra activities are 
            available.
        </p>
    </section>
    <div class="clearfix"></div>
    <section class="one-third">
        <h3>Classroom</h3>
        <img src="{{ asset('img/facility-1.png') }}"/>
        <p>Well ventilated, lighted and well furnished classroom with latest teaching 
            facilities are available.</p>

    </section>
    <section class="one-third">
        <h3>Library</h3>
        <img src="{{ asset('img/facility-1.png') }}"/>
        <p>Library with sufficient books and reference materials and providing
            all subject books to each student for whole year.</p>

    </section>
    <section class="one-third">
        <h3>Lab</h3>
        <img src="{{ asset('img/facility-1.png') }}"/>
        <p> Well equipped laboratories, workshops, internal examination's
            and field visit are available.</p>
    </section>
</div><!-- ENd of innner wrapper -->
<div class="clearfix"></div>
<!-- footer section is startted -->

</div>
@endsection
