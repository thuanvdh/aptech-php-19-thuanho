<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function hienThiThongTin()
{
    $users = DB::table('users')->get();
    return view('users', ['users' => $users]);
}
}
