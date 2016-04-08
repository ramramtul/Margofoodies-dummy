<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Request;
use Validator;
use App\Users;
use Illuminate\Routing\Redirector;
use //use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function index(){
    	return view('register');
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama_lengkap' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|min:6',
    //         'username' => 'required|min:3',
    //     ]);

    //     $this->save();
    //     return redirect('home');

    //     // The blog post is valid, store in database...
    // }

    public function create(){
    	
    	// $input = Request::all();
    	// Users::create($input);
     //    return redirect('home');
        $user = new Users;
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->nama = Input::get('nama_lengkap');
    validator($user);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'username' => 'required|min:3',
         ]);
    }

    /*
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
    */
     
    protected function create(array $data)
    {
        return Users::create([
            'nama_lengkap' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}