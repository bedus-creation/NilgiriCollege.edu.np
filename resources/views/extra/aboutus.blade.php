@extends('layouts.default')
@section('head')
<link href='{{ asset('/css/aboutus.css') }}' rel="stylesheet"/>
@endsection
@section('content')
<div class="content">
    <div class="content-head">
        <div class="content-inner">
            <h1>About us </h1>
        </div>  
    </div>
    <div class="content-inner">
        <div class="content-left">
            <div class="image">
                <img src="{{asset('img/principal.jpg')}}"/>
            </div>
            <div class="message">
                <div class="content-head">
                    <p class="message-head">Message from Principal</p>
                </div> 
                <p>
                    TU affiliated NilgiriCollege; Itahari-5 extends its arms to all
                    young entrants who will find that the college environment provides 
                    them with everything they need to develop their ability and creativity.
                    </br>
                    Nilgiri college was established in2069 B.S. with objective to produce 
                    a considerable number of qualified food Professionals.<br>
                    Today there are plenty of good opportunity in research foundation 
                    , analytic testing, quality control, production, and marketing of food items
                    hospitals, academic Institution for food Technologist.</br>
                    To fulfill the demand of food professionals in Nation as well as aboard,
                    Nilgiri College was established at Itahari with all the facilities need for 
                    students for their academic carrier and practical exposer.
                </p>
            </div>
            <div class="message-1">
                <div class="content-head">
                    <p class="message-head">Introduction</p>
                </div> 
                <p>
                    We are delighted to introduce "Nilgiri College" a pure food technology 
                    college established by the team of young and enthusiastic professional and guided 
                    by renowned and experienced faculties with the clean objective of providing a top 
                    class education and practical exposure as an affordable fee,
                    and is located at green city Itahari in quite pleasant and peaceful environment.

                    Food Technology is the branch of science in which food science is applied in 
                    manufacturing, preserving, quality control and packaging of food products, and is linked
                    to wide variety of sister science including Nutrients, Engineering, Biotechnology,
                    research and development, Quality control and analysis.
                </p>
            </div>
            <div class="image-1">
                <img src="{{asset('img/7.png')}}"/>
            </div>
            <div class="clearfix"></div>
            <div class="content-head">
                <h1>Objective</h1>
            </div>
            <div class="objective">
                <ul>
                    <li> To develop the institute as a center of excellence in education
                        and research that will produce highly competent food technologist.
                    </li>
                    <li> To perform various research and development works on food science
                        and technology. 
                    </li>
                    <li> To provide consultancy service. </li>
                    <li> To provide creative and innovative students who will capable
                        of generating various technical profession by using their own expertise.</li>
                </ul>
            </div>
            <div class="content-head">
                <h2>Silent Features of Nilgiri college</h2>
            </div>
            <div class="silent-features">
                <ul>
                    <li>
                        highly qualified, experienced teachers and devoted teaching professionals,
                        Who always encourages student to learn new and work hard. 
                    </li>
                    <li>
                        Well ventilated, lighted and well furnished classroom with latest teaching facilities are available. 
                    </li>
                    <li>
                        Well equipped laboratories, workshops, internal examination's and field visit are available. 
                    </li>
                    <li>
                        Library with sufficient books and reference materials and providing all subject books to each student for whole year.
                    </li>
                </ul>
            </div>
            <div class="content-head">
                <h1 class="faculty-head">Faculty member</h1>
            </div>
            <div class="faculty">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mr. Rajesh Ku shah</td>
                            <td>Principal, Food Tech</td>
                        </tr>      
                        <tr class="success">
                            <td>2</td>
                            <td>Hom Nath Baral (M.Sc- stat)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="danger">
                            <td>3</td>
                            <td>Suman ku. Lal Das(M.sc)</td>
                            <td>professor</td>
                        </tr>
                        <tr class="info">
                            <td>4</td>
                            <td>Rajendra Mehta (M.Sc phy)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="warning">
                            <td>5</td>
                            <td>Dev Raj Acharya(Food Tech)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="active">
                            <td>6</td>
                            <td>Rupesh Kumar mishra(M.Sc Chem)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="success">
                            <td>7</td>
                            <td>Kabindra Bhattarai (Food Tech)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="danger">
                            <td>8</td>
                            <td>Mohan kumar Raut(M.A math)</td>
                            <td>professor</td>
                        </tr>
                        <tr class="info">
                            <td>9</td>
                            <td>Arjun Ghimire(Food Tech)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="warning">
                            <td>10</td>
                            <td>Dipendra Pandit(Msc. Chem)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr class="active">
                            <td>11</td>
                            <td>Tejan Karki(Food Tech)</td>
                            <td>Lecturer</td>
                        </tr>
                        <tr>
                            <td>Advisory Board</td>
                        </tr>
                        <tr class="danger">
                            <td>1</td>
                            <td>Dr. Dhan Bdr. Karki (Food tech)</td>
                            <td>Professor</td>
                        </tr>
                        <tr class="success">
                            <td>2</td>
                            <td>Dr. Surendra katawal(Food Tech)</td>
                            <td>Professor</td>
                        </tr>
                        <tr>
                            <td>Chairman</td>
                        </tr>
                        <tr class="warning">
                            <td>1</td>
                            <td>Mr. Er. Pramod ku. shah</td>
                            <td>chairman</td>
                        </tr>
                    </tbody>
                </table>

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
                            echo "<img src='".URL($regs[1])."'>";
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
</div>
<div class="clearfix"></div>
@endsection