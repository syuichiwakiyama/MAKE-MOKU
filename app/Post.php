<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id' , 'area_id' , 'lang_id' ,'title' ,'lang' ,'message'
    ];

    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Area' , 'area_id' ,'id');
    }

    public function lang()
    {
        return $this->belongsTo('App\Lang' ,'lang_id' ,'id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment' , 'id' ,'post_id');
    }

  



 
}
