<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{

   function __construct()
   {
       $this->middleware('auth');
       $this->middleware('admin');
   }
}
