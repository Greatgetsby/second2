<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\user;

class ProfilesController extends Controller
{
    public function index()
    {
     
        return view('home');
    }
}
