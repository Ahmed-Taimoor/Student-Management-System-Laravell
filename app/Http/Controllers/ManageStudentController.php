<?php

namespace App\Http\Controllers;

use App\Jobs\MyJob;
use App\Models\User;
use Illuminate\Http\Request;

class ManageStudentController extends Controller
{
    public function addstudent()
    {
        return view('manage-student.add-students');
    }

    public function updatestudent($id)
    {
        $student = User::where(['role' => 'student', 'id' => $id])->first();
        $data = compact('student');

        return view('manage-student.update-students')->with($data);

        // return view('manage-student.add-students');
    }
    public function updatestudentreq($id, Request $request, )
    {
        $user = User::find($id);

        print_r($user);
        if (!$user) {
            abort(404, 'User not found');
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect('viewstudent');
    }


    public function deletestudent($id)
    {
        // return view('manage-student.add-students');
    }
    public function viewstudent()
    {
        $students = User::where('role', 'student')->get()->toArray();
        $data = compact('students');

        return view('manage-student.view-students')->with($data);
    }

    public function submitstudent(Request $request)
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
            // dd($finalarray);
            foreach ($finalarray as $data) {
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'role' => 'student',
                ]);

            }
        }
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname(), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $data = array_map('str_getcsv', $fileContents);
        $header = $data[0];
        unset($data[0]);


        MyJob::dispatch($data, $header);
    }

}