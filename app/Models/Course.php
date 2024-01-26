<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Course extends Model
{
    use HasFactory;
    use HasRoles;


    protected $fillable = [
        'course_name',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }
}
