<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    /**
     * the attributes that are mass assignable
     * 
     * @var array
     */

    protected $fillable= ['name'];


    public function lessons()
     {
         return $this->belongsToMany(Lesson::class, 'lesson_tags');
     }
}
