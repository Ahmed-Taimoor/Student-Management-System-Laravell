<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function download($id)
    {

        $user = User::where(['id' => $id])->first();
        // dd($user->toArray());
        $data = $user->toArray();
        // dd($data);


        $pdf = Pdf::loadView('admin.printable-user', ['data' => $data]);
        // $pdf->setPaper('A4', 'portrait');

        return $pdf->stream();
        // return view('admin.printable-user', ['data' => $data]);

    }
}