@extends('layouts.default')

@section('head')
<link href="{{asset('css/aboutus.css')}}" rel="stylesheet"/>
<link href="{{asset('css/post.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<div class="content">
    <div class="content-head">
        <div class="content-inner">
            <h1>  All News  </h1>
        </div>
    </div>
    <div class='content-inner'>
        <div class="content-left">
            @if(count($posts)>0)
            <div class="post">
                @foreach($posts as $post)
                <div class="notice-post-inner">
                    <div class="notice-left">
                        <?php
                        if (preg_match('@src="([^"]+)"@', $post->body, $regs)) {
                            echo "<img src='" . URL($regs[1]) . "'>";
                        } else {
                            
                        }
                        ?>
                    </div>
                    <div class="notice-right">
                        <div class="post-title">
                            <a href="{{ URL('inform/notice') }}/{{ $post->id }}">{{ $post->title }}</a>
                        </div>
                        <div class="post-content">
                            {{ str_limit(strip_tags($post->body),300) }}              
                        </div>
                    </div>
                </div>
                @endforeach
            </div>    
            @endif
        </div>
        <div class="content-right">
            <div class="content-head">
                <p class="message-head">From Notice</p>
            </div> 
            @if(count($news)>0)
            <div class="post">
                @foreach($news as $new)
                <div class="post-inner">  
                    <?php
                    if (preg_match('@src="([^"]+)"@', $new->body, $regs)) {
                        echo "<img src='" . URL($regs[1]) . "'>";
                    } else {
                        
                    }
                    ?>
                    <div class="post-title">
                        <a href="{{ URL('inform/notice') }}/{{ $new->id }}">{{ str_slug($new->title,' ') }}</a>
                    </div>
                    <div class="post-content">
                        {{ str_limit(strip_tags($new->body),100) }}              
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