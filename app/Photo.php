<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
     public $uploads = '/image/';
    protected $fillable = ['file'];

   

    public function getFileAttribute($photo) {
    	return $this->uploads . $photo;             
    }																	//NOT WORKING
}
