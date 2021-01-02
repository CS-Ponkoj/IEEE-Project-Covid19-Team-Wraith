<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table='replies';
    protected $fillable=['text','author_id','comment_id'];
    public function comment(){
        return $this->belongsTo(Comment::class);
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
}
