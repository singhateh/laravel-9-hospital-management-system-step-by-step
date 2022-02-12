<?php

namespace App\Http\Jambasangsang\Traits;


trait updatableAndCreatable{

    //  this trait will insert the user that is login and
    // assigning a new data inside the database
    // the id of the user will be created from this trait.


    public static function bootCreatable()
    {
        // if user is logged in
        if (auth()->check()) {

            // Creating Function
            static::creating(function($model){
                $model->created_by_id = auth()->user()->id;
            });

            // Updating Function
            static::updating(function($model){
                $model->updated_by_id = auth()->user()->id;
            });
        }
    }


}
