@extends('layouts.default')

@section('head')
<link href='{{ asset('/css/aboutus.css') }}' rel="stylesheet"/>
<link href='{{ asset('/css/detail-body.css') }}' rel="stylesheet"/>
@endsection

@section('content')
<div class="content">
    <div class="content-head">
        <div class="content-inner">
            <h1>In Detail</h1>
        </div>  
    </div>
    <div class="content-inner">
        <div class="content-left">
            @if(count($data)>0)
            <div class="content-head">
                <p class="message-head " style='text-decoration:none;'>{{ str_slug($data[0]->title,' ') }}</p>
            </div> 
            <div class="detail-body">
                {!!
                    $data[0]->body;
                !!}
            </div>
            @endif
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