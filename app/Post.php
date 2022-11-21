<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content','catagory_id','featured'
    ];

    public function catagory()
    {
        return $this->belongsTo('App\Catagory');

    } 
}
