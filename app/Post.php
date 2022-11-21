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
    protected $dates = ['deleted_at'];

    public function catagory()
    {
        return $this->belongsTo('App\Catagory');

    } 
}
