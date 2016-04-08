<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	return view('register');
    }

    public function create(){
    	
    	$input = Request::all();
    	// DB::table('users')->insert([
    	// 	'nama'=>$input
    	// ]);
    	User::create($input);
    }
}