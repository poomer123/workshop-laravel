<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    function showUserDetail($name) {
        return '<h1>Name : ' . $name . '</h1>';
    }
}
