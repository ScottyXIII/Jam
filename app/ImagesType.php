<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesType extends Model
{
    protected $table = 'images_type';

    public function Images() 
    {
    	return $this->belongsToMany('App\Images', 'image_type', 'image_id', 'type_id');
    }

}
