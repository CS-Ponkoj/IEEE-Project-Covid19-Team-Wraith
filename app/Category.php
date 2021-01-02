<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected  $table='categories';
    protected $fillable=['title','slug'];
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    public function getRouteKeyName() {
        return 'slug';
    }
}
