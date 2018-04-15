<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
}
