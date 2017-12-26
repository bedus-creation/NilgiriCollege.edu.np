<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

class AdminController extends Controller {
    public function uploadImage(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destination = 'uploads/images/';
            return $file->move($destination,$request->file('image'));   
            //$path=$request->file('image')->move(public_path().$destination, $request->file('image'));
            //return $request->image->store('public/uploads/images/'.$file->getMimeType());
            //return Storage::putFile('public',$request->file('image'));
            //$path = Storage::putFile('avatars', $request->file('image'));
            //return $path;
        } else {
            return $request->file('image');
        }
    }
    /*
     * Creating mcq ! the submit request by creating mcq is handelled by
     * this function
     */
    public function getAllPost(){
        $data=DB::table('posts')
                ->orderBy('id','DESC')
                ->limit(20)
                ->get();
        return view('admin.all-post',['data'=>$data]);
    }
    public function editPost(Request $request) {
    $request["title"] = str_slug($request->title, '-');
        $this->validate($request,[
            'title'=>'required|unique:posts,title,'.$request['id'],
            'body'=>'required'
        ]);
        $data=DB::table("posts")
                ->where('id',$request['id'])
                ->update(['title'=>$request['title'],
                    'body'=>$request['body']]);
        if($data){
            $request->session()->flash('flash_message','You have sucessfully updated !');     
        }else{
            $request->session()->flash('flash_message','Sorry Failed to update !');
        }
        return redirect()->back();        
    }
    public function createPost(Request $request){
        $request["title"] = str_slug($request->title, '-');
        $this->validate($request,[
            'title'=>'required|unique:posts',
            'body'=>'required'
        ]);
        $post =new Post();
        $post->userId=Auth::User()->id;
        $post->notice=$request["notice-option"];
        $post->title=$request["title"];
        $post->body=$request["body"];
        $post->images=$request["heading-image"];
        if($post->save()){
            $request->session()->flash('flash_message','You have sucessfully created your Post!');
        }
        return redirect()->back();
    }
    public function getEditPost(Request $request,$title=''){
        $post=DB::table('posts')
                ->where('title',$title)
                ->get();
        if(!$post){
            $request->session()->flash('flash_message','NO posts ! The post may be removed');
        }
        return view('admin.edit-post',['post'=>$post]);
    }
    public function actionPublish(Request $request) {
        $data=DB::table('posts')
            ->where('id', $request->id)
            ->get();
        $publish=($data[0]->publish==0)? 1:0;
        $data=DB::table('posts')
            ->where('id', $request->id)
            ->update(['publish' =>$publish]);
        $publish= ($publish==1)? "publish":"unpublish";
        if($data){
            $request->session()->flash('flash_message','successfully '.$publish.' the Post!');
        }
        return redirect()->back();
    
    }
    public function actionDelete(Request $request,$id) {
        $data=DB::table('posts')
            ->where('id', $request->id)
            ->delete();
        if($data){
            $request->session()->flash('flash_message','sucessfully Deleted the Post!');
        }
        return redirect()->back();
    }
}



