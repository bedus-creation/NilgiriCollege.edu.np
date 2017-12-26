<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;

class LoginController extends Controller
{
    protected $login=false;
    public function __construct() {
        if (Auth::check()) {
            $this->login=true;
        } else if (Auth::viaRemember()) {
            $this->login=true;
        }
    }

    public function getLogin(Request $request) {
        if($this->login){
            return redirect(config('init.baseurl') . "/admin");
        }else{
            return view('login');
        } 
    }
    public function getSignup(Request $request) {
        if($this->login){
            return redirect(config('init.baseurl') . "/admin");
        }else{
            return view('signup');
        } 
    }
    public function login(Request $request){
        $remember = ($request['remember']==="on")? true:false;
        if (Auth::attempt(["username" => $request['username'], "password" => $request['password']], $remember)) {
            $id = Auth::user()->id;
            $key = config('init.session.session_name');
            $request->session()->put($key, $id);
            return redirect()->back();
        }else{
            $request->session()->flash('flash_message', 'Login failed, username or password doesnot matched ! '
                            . '');
        }
        return redirect()->back();
    }    
    public function createUser(Request $request){
        $this->validate($request, [
            'username' => 'required|unique:user_data',
            'password' => 'required|min:6',
            're-password'=>'required|min:6|same:password',
            'name' => 'required'
        ]);
        $user = new User();
        $user->username = $request['username'];
        $user->password = bcrypt($request['password']);
        $user->fullname = $request['name'];
        $user->language =  0;
        $user->level = "0";

        $response=$user->save();
        if($response){
            return redirect(config('init.baseurl') . "/user/profile");
        }else{
            $request->session()->flash('flash_message', 'Unable to create users ! '
                            . '');
            return redirect()->back();
        }
          
        
    }
}
