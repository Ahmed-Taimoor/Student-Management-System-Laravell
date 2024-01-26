<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{

    public function portalRoute()
    {

        $user = auth()->user()->role;
        if ($user == 'teacher')
            return view('teacher.portal');
        if ($user == 'admin')
            return view('admin.portal');
        if ($user == 'student')
            return view('student.portal');


    }
}