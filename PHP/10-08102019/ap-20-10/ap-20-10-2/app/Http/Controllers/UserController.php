<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() 
    {
    $users = User::get();
    return view('index',['users'=>$users]);
    }

    function show($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('show', ['user' => $user]);
    }

    function destroy($id)
    {
        User::destroy($id);
        $users = User::get();
        return view('index',['users'=>$users]);
    }

    function create()
    {
        return view('create');
    }

    function store()
    {
        User::insert(
            [
            'name'=>$_POST['ten'],
            'email'=>$_POST['email'],
            'password'=>$_POST['matkhau']
            ]);
        $users = User::get();
        return view('index',['users'=>$users]);
    }
    
    function edit($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('edit', ['user' => $user]);
    }

    function update($id)
    {
        $user = User::where('id','=',$id)->first();
        $user->name = $_POST['ten'];
        $user->email= $_POST['email'];
        $user->password= $_POST['matkhau'];
        $user->save();
        return redirect()->route('users.index');
    }
}
