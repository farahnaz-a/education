<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Course Category
    public function getCategory(){

        return $this->BelongsTo('App\Models\Category', 'category_id', 'id');
    }

    // Course Author
    public function getAuthor(){

        return $this->BelongsTo('App\Models\User', 'user_id', 'id');
    }

    // Get Lessons
    public function getLessons(){

        return $this->hasMany('App\Models\Lesson', 'course_id', 'id');
    }
}
