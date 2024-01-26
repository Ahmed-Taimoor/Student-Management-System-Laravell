<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;



class UsersController extends Controller
{
    public function users(UsersDataTable $dataTable)
    {

        return $dataTable->render('admin.view-users');

    }
}