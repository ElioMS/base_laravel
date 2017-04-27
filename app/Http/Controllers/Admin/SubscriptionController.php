<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::All();
        
        return view('admin.subscription.index', compact('subscriptions'));
    }

     public function export() {
        \Excel::create('Contact form', function($excel){
             $excel->sheet('Subcategorías' , function($sheet){
                $contacts = Subscription::All();
                $excel = array();
                foreach ($contacts as $key => $value) {
                    $email      = $value->email;
                    
                    $array = array($email);
                    array_push($excel , $array);
                }
           
                $sheet->fromArray($excel, null, 'A1', false, false)->prependRow(array('Email'));
                $sheet->setBorder('A1:C4', 'thin');
                $sheet->cells('A1:D1', function($cells) {
        
                    $cells->setAlignment('center');
                    $cells->setBackground('#85C3FE');
                    $cells->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                    ));
                });
             });
        })->export('xls');
    }

}
