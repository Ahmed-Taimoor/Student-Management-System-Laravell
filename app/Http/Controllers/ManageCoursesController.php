<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class ManageCoursesController extends Controller
{
    public function viewcourse()
    {
        $courses = Course::all()->toArray();

        // dd($courses);
        $data = compact('courses');

        return view("manage-course.view-courses")->with($data);
    }
    public function addcourse()
    {
        $users = User::all();

        $data = compact('users');

        return view("manage-course.add-courses")->with($data);
    }

    public function submitcourse(Request $request)
    {
        Course::create([
            'course_name' => $request->name,
        ])->users()->attach($request->user);
    }
}