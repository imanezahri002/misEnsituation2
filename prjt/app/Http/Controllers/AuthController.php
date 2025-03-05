<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(Request $request){
        $validated = $request->validated([
            'nom'=>'required',
            'email'=>'required|unique',
            'password'=>'required',
            'role'=>'required'
        ]);
        User::->create([
            'name'=>$request('nom'),
            'email'=>$request('email'),
            'password'=>$request('password'),
            'role_id'=>$request('role'),
        ]);

    }
}
