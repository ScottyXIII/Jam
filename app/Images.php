<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
	
    public function Type() 
    {
    	return $this->belongsToMany('App\ImagesType', 'image_type', 'image_id', 'type_id');
   	} 

 	public function ImagesByTypeName($type_name) 
    {
    	$img_type = ImagesType::where("name", '=', $type_name)->first();
    	
    	return $img_type->Images(); 
   	} 

   	public function CaroselImages() 
    {
    	return $this->ImagesByTypeName('carosel');
   	} 

    public function EndorsmentImages() 
    {
      return $this->ImagesByTypeName('endorsments');
    } 
}
