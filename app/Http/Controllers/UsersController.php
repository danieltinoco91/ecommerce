<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    
    public function login(){
        return view('admin.login');
    }
    public function index(){
        return view('admin.users');
    }

   


}
