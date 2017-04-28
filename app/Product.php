<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $guarded = ['id'];

     public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function getStatusModAttribute(){

    	$value = $this->status;

    	$status = "Estado" ;

    	if ($value ==0){
    		$status ="Inactivo";
    	}

    	if ($value ==1){
    		$status ="Activo";
    	}


    	return $status;


    }
}
