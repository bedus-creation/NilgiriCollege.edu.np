<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ExtraController extends Controller
{
    //
    public function getAboutUs(Request $request){
        $posts=  DB::table('posts')
                ->Where('notice',1)
                ->limit(6)
                ->OrderBy('id','DESC')
                ->get();
        return view('extra.aboutus',['posts'=>$posts]);
    }
    public function getProgramBtech(Request $request){
        $posts=  DB::table('posts')
                ->Where('notice',1)
                ->limit(6)
                ->OrderBy('id','DESC')
                ->get();
        return view('extra.program.btech',['posts'=>$posts]);
    }
}
