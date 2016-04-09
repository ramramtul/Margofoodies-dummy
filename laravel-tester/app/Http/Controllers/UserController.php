<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use Illuminate\Routing\Redirector;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index(){
    	return view('register');
    }

    public function create(Request $request){
       $this -> val($request);

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'username' => 'required|min:3',
        ]);
    }

    public function val(){
       

        $user = new Users;
        $user->nama_lengkap = Input::get('nama_lengkap');
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = bcrypt(Input::get('password'));
        $user->save();
        return redirect('home');
    }

    // public function store(array $data){
        
        
    // }

}
     