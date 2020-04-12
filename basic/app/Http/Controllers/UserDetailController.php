<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    function showUserDetail() {
        return view('profile')
        ->with('name', 'poom')
        ->with('nickname', 'poom');
    }
}
