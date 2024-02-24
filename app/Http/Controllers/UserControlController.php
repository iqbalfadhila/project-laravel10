<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControlController extends Controller
{
    function index(){
        return view('user_control.index');
    }
}
