@extends('layouts.default')

@section('head')
<link href='{{ asset('/css/aboutus.css') }}' rel="stylesheet"/>
<link href='{{ asset('/css/btech.css') }}' rel="stylesheet"/>
@endsection

@section('content')
<div class="content">
    <div class="content-head">
        <div class="content-inner">
            <h1>Program </h1>
        </div>  
    </div>
    <div class="content-inner">
        <div class="content-left">
            <div class="content-head">
                <p class="message-head">Food Technology (B.Tech.)</p>
            </div> 
            <div class="message-1">
                <p>
                    Food Technology is the branch of science in which food science
                    is applied in manufacturing, preserving, quality control and packaging
                    of food products, and is linked to wide variety of sister science including 
                    Nutrients, Engineering,
                    Biotechnology, research and development, Quality control and analysis.
                    B.Tech food technology is an advanced course in the field 
                    of food science and has high degree of recognition in modern food
                    industrial world. Today several career options are available 
                    in Nepal among that food technology course has several employment
                    opportunity in diversified field.
                    This program aims at producing high trained skilled food technologist
                    who have carrier opportunity in production, Nutrition, R & D, Quality
                    control etc. both in Government and private sector(national and multinational company)
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="content-head">
                <p class="message-head">Available career options for Food technology</p>
            </div> 
            <div class="message-1">
                <ul>
                    <li> Food Research Officer</li>
                    <li> Dairy Technologist</li>
                    <li> Consultant of food productions</li>
                    <li> Food Safety Officer</li>
                    <li> Quality Assurance manager</li>
                    <li> Food Inspector</li>
                    <li> Flavour Technologist</li>
                    <li> Meat and poultry technology</li>
                    <li>Food Microbiologist</li>
                    <li>HACCP & ISO AUditor</li>
                    <li>Nutritionist or diet planner</li>
                    <li>Operation Manager </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="content-head">
                <h1 class="college-enrollment">College Enrollment</h1>
            </div>
            <div class="content-head">
                <p class="message-head">Admission Requirement</p>
            </div>
            <div class="message-1">
                <p>
                     Admission for B.Tech (Food) generally opens in August.
                    Student willing to get admission must pass the entrance 
                    exam conducted by TU.
                    Student with +2 Science(Physical or Biological) group with 
                    minimum 2nd division(45%) score or diploma in food and Dairy 
                    Technology are eligible for admission.
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="content-head">
                <p class="message-head">Course Content</p>
            </div>
            <div class="message-1">
                <p>
                    B.Tech (Food) is four years course with total marks of
                    2000 based on annual exam system 75% marks are allotted
                    for theory and 25% for practical work conducted in college.
                </p>
                <div class="content-head">
                    <h3>1st year</h1>
                </div>
                <ul>
                    <li> Physics </li>
                    <li> Math and Statics </li>
                    <li> Basic and Food microbiology </li>
                    <li> Basic principle of Engineering </li>
                    <li> Insturmental technique of analysis </li>
                    <li> Chemistry </li>
                </ul>
                <div class="content-head">
                    <h3>2nd year</h1>
                </div>
                <ul>
                    <li> Tech. of food product-I</li>
                    <li> Food chemistry </li>
                    <li> Principle of food processing </li>
                    <li> Food Engineering </li>
                    <li> Biochemistry and Human Nutrition </li>
                </ul>
                <div class="content-head">
                    <h3>3rd year</h1>
                </div>
                <ul>
                    <li> Technology of food product-II</li>
                    <li> Technology of food product-III</li>
                    <li> Biochemical Engineering </li>
                    <li> Industrial Microbiology </li>
                    <li> Food Q.C. & analysis </li>
                </ul>
                <div class="content-head">
                    <h3>4th year</h1>
                </div>
                <ul>
                    <li> Storage & packaging </li>
                    <li> Operation Research and food plant management </li>
                    <li> Dairy Technology </li>
                    <li> Dissertation </li>
                    <li> In plant Training and class Seminar</li>
                </ul>
            </div>
        </div>
        <div class="content-right">
            <div class="content-head">
                <p class="message-head">From Notice</p>
            </div> 
            @if(count($posts)>0)
            <div class="post">
                @foreach($posts as $post)
                <div class="post-inner">  
                    <?php
                    if (preg_match('@src="([^"]+)"@', $post->body, $regs)) {
                        echo "<img src='" . URL($regs[1]) . "'>";
                    } else {
                        
                    }
                    ?>
                    <div class="post-title">
                        <a href="{{ URL('inform/notice') }}/{{ $post->id }}">{{ str_slug($post->title,' ') }}</a>
                    </div>
                    <div class="post-content">
                        {{ str_limit(strip_tags($post->body),100) }}              
                    </div>
                </div>
                @endforeach
            </div>    
            @endif
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection