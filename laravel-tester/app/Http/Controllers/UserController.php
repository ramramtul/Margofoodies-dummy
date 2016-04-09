<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Validator;
use App\Users;
use Illuminate\Routing\Redirector;
 //use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function index(){
    	return view('register');
    }

    public function create(Request $request){
       
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'username' => 'required|min:3',
        ]);

        User::create([
            'nama_lengkap' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('home');
    }

    public function val(array $request){
        echo "string";
        
        // $input = $request->all();
    }

    public function store(array $data){
        
        
    }

}
     