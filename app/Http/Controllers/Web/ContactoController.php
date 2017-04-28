<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactoController extends Controller
{
   	public function __invoke()
    {
       
        return view("web.contacto");
    }
}
