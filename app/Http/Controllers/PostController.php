<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class PostController extends Controller
{
    public function getPost(Request $request,$id){
        $data=  DB::table('posts')
                ->where('id', '=', $id)
                ->get();
        $posts=  DB::table('posts')
                ->Where('notice',1)
                ->limit(10)
                ->OrderBy('id','DESC')
                ->get();
        return view('detail-post',["data"=>$data,"posts"=>$posts]);
                
    }
    public function allPost(Request $request){
        $posts=  DB::table('posts')
                ->Where('notice',1)
                ->limit(10)
                ->OrderBy('id','DESC')
                ->get();
        $news=  DB::table('posts')
                ->Where('notice',0)
                ->limit(10)
                ->OrderBy('id','DESC')
                ->get();
        return view('post',["posts"=>$posts,"news"=>$news]);
    }
    public function getNews(Request $request,$id){
        $posts=  DB::table('posts')
                ->where('id', '=', $id)
                ->get();
        die($posts);
                
    }
    public function allNews(Request $request){
        $posts=  DB::table('posts')
                ->Where('notice',0)
                ->limit(10)
                ->OrderBy('id','DESC')
                ->get();
        $news=  DB::table('posts')
                ->Where('notice',1)
                ->limit(10)
                ->OrderBy('id','DESC')
                ->get();
        return view('news',["posts"=>$posts,"news"=>$news]);
    }
}
