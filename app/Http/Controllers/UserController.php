<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getuser()
    {
        //return "CHiran thapa";
        return view('user');
    }

    function aboutuser()
    {
        return "I am chiran raj thpaa";
    }
    function getUserName($name)
    {
        //return "I am chiran raj thpaa" . $name;
        return view('getusername', ['name' => $name]);
    }

    function adminlogin()
    {
        return view('admin.login');
    }
}
