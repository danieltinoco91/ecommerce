<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserStoreRequest;

class UsersController extends Controller {

    public function login() {
        return view('admin.login');
    }

    public function index() {
        $users = \App\User::all();

        return view('admin.users', ['users' => $users]);
    }

    public function dologin(Request $request) {
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                            ->withErrors($validator);
        } else {
            $userdata = array(
                'email' => $request->input('email'),
                'password' => $request->input('password')
            );
            if (Auth::attempt($userdata)) {
                return Redirect::to('admin');
            } else {
                // validation not successful, send back to form 
                return Redirect::to('login');
            }
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/');
    }

    public function store(UserStoreRequest $request) {
        if ($request->exists("id")) {
            DB::table('users')
                    ->where('id', $request->input("id"))
                    ->update($request->all());
        } else {
            $datos = $request->all();
            $datos["password"] = \Illuminate\Support\Facades\Hash::make($datos["password"]);
            \App\User::create($datos);
        }
        $respuesta = ["state" => 1];
        return response()->json($respuesta);
    }

    public function delete(Request $request, $id) {
        $state = 1;
        if (!DB::table('users')->where('id', '=', $id)->delete()) {
            $state = 0;
        }
        $respuesta = ["state" => $state];
        return response()->json($respuesta);
    }

}
