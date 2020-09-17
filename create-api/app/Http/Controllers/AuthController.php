<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        $rules = config('rules.auth');
        $auth = request()->all();

        $validate = Validator::make($auth, $rules);

        if($validate->fails()) {
            $errors = $validate->errors();
            return response($errors, 422);
        }
        dd($auth);
    }
}