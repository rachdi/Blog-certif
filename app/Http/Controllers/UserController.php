<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller

{

	public function admin(){
$users = User::all();
        return view('login',compact('users'));
		
	}
    public function verif(){
    	$input= Input::all();
    	$input['email'] = e($input['email']);
    	$input['password'] = e($input['password']);
    	if(Auth::attempt(['email'=>$input['email'],'password'=>$input['password']])){

    		Auth::attempt(['email'=>$input['email'],'password'=>$input['password']]);
    		dd($input);
    		return view('article');
    	}

    } 
     public function isAdmin()
{
    return $this->is_admin; // this looks for an admin column in your users table
}

}
