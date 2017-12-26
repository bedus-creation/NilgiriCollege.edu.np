<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getSearch(Request $request,$q){
        $keys=explode(" ",$q);
        $len=  sizeof($keys);
        $data=DB::table('posts')
                ->orWhere(function($query) use ($q,$keys,$len){
                    if($len==1){
                        $query->where('title','LIKE','%'.$q.'%');
                    }else{
                        foreach ($keys as $sql){
                            $query->where('title','LIKE','%'.$sql.'%');
                        }
                    }
                })
                ->limit(5)
                ->get();
        if(count($data)>0){
            return view('layouts.search',['data'=>$data]);           
        }else{
            echo "empty";
        }        
    }
}
