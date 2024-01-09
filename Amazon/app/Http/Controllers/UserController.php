<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request('term') != "") {
            $term = request('term');
            $users = User::where('name', "LIKE", "%$term%")->get();
            // $users = User::where('name', $term)->get(); //SELECT ALL FROM USERS WHERE NAME = $term
            // $users = User::find($term); //SELECT ALL FROM USERS WHERE ID = ??
            // $_GET["term"];
        } else {
            $users = User::all();
        }
        return view('users.list', compact('users'));
    }
}
