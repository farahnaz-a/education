<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];


    // getCourses
    public function getCourses(){

        return $this->hasMany('App\Models\Course');
    }

    // getLivesessions
    public function getLivesessions(){

        return $this->hasMany('App\Models\LiveSession');
    }

}
