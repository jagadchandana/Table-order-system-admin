<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function __construct()
    {
        if (config('app.env') != 'development') {
            $this->middleware('auth:sanctum');
        }
    }
}
