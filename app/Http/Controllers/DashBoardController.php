<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends ParentController
{
    public function index()
    {
        return view('pages.dashboard');
    }
    public function table()
    {
        return view('pages.tables');
    }
}
