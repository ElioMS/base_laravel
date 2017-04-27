<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::macro('stdInput', function($label, $name) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label.' </strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::text($name , null , ['class' => 'form-control', 'placeholder' => '']);
            $item .= '</div>';
            
            return $item;
        });

        \Form::macro('stdImg', function($label , $name, $path = null) {

            $path ?  $nombre_imagen = array_last(explode('/', $path)) : $nombre_imagen = '';

            $item  = '<label class="col-sm-2 control-label"> <strong> '.$label.' </strong> </label>';
            $item .= '<div class="col-sm-8 imagen-array">';
            $item .= '<p class="title-image-flm"> '. $nombre_imagen.' </p>';
            $item .= '<div class="ui fluid btn-group">';
            $item .= '<div data-input="'.$name.'" class="btn btn-info fm-button btn-addon m-b-sm btn-sm">  <i class="fa fa-search"></i> Ver Galeria </div>';
            $item .= \Form::text($name , null , ['id' => $name , 'class' => 'input-flm', 'placeholder' => '', 'hidden' => true]);
             if ($path) {
                $item .= '<a class="btn btn-default preview-flm" data-name="'.$path.'"> <i class="fa fa-eye"> </i></a>';
            }
            // $item .= '<input class="input-flm" id="'.$name.'" hidden="1" name="'.$name.'" type="text">';
            $item .= '</div>';    
            $item .= '</div>'; 

            return $item;        
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
