<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','content','catagory_id','featured','slug'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }
    

    protected $dates = ['deleted_at'];

    public function catagory()
    {
        return $this->belongsTo('App\Catagory');

    } 
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
