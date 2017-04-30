<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

    public function showLoginForm() {
    	return view('login');
    }

    public function login() {
    	// Validate the form data
    	// $this->validate(request() , [
    	// 	'name' => 'required',
    	// 	'password' => 'required'
    	// ]);

    	$credentials = [
    		'name' => request('name'),
    		'password' => request('password')
    	];

    	// Attemp to log the user in admin model
    	if (\Auth::guard('admin')->attempt($credentials, request('remember'))) {
    		// if successful, redirect to the admin panel
    		return redirect()->intended(route('panel'));
    	}
    	
    	// if unsuccesful redirect back 
    	return redirect()->back()->withInput(request()->only('name'));
    	
    }
}