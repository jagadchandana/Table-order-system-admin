<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuCardController extends Controller
{
   public function index()
   {
        return view('pages.menu-card');
   }
}
