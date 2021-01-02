<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blogs';
    protected $fillable = ['title','slug','body','image','created_at','category_id','published_at'];

    public function getRouteKeyName() {
        return 'slug';
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function scopePublished($query){
        return $query->where('published_at',1);

    }
    public function comments(){
        return $this->hasMany((Comment::class));
    }
}
