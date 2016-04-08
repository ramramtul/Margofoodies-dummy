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

    public function create(){
        
   	$input = $request -> all();
    Users::create($input);
    return redirect('home');

    }
}
     