<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $fillable=['text','blog_id','author_id'];
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
}
