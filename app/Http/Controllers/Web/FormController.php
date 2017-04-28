<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class FormController extends Controller
{
	public function store(Request $request){


	Contact::create([

             "name"=>request('name'),
              "lastname"=>request('lastname'),
               "email"=>request('email'),
                "phone"=>request('phone'),
                  "message"=>request('message')

        ]);

             return \Redirect::to("/indice");






	}
   
}
