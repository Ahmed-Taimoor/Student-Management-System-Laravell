<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ManageTeacherController extends Controller
{


    public function viewteacher()
    {
        $teachers = User::where('role', 'teacher')->get()->toArray();
        $data = compact('teachers');

        return view('manage-teacher.view-teachers')->with($data);
    }

    public function addteacher()
    {
        return view('manage-teacher.add-teachers');
    }

    public function submitteacher(Request $request)
    {
        $finalarray = [];

        if ($request) {
            $req = $request->all();

            foreach ($req as $key => $value) {
                if (is_array($value)) {
                    foreach ($value as $key1 => $value1) {
                        $finalarray[$key1][$key] = $value1;
                    }
                }
            }

            foreach ($finalarray as $data) {
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'role' => 'teacher',
                ]);

            }
        }
    }

    public function updateteacher($id)
    {
        $teacher = User::where(['role' => 'teacher', 'id' => $id])->first();
        $data = compact('teacher');

        return view('manage-teacher.update-teachers')->with($data);

        // return view('manage-student.add-students');
    }



    public function updateteacherreq($id, Request $request, )
    {
        $user = User::find($id);
        // $user = User::where('email', $request->email)->get()->toArray();
        print_r($user);
        if (!$user) {
            abort(404, 'User not found');
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect('viewteacher');
    }

}