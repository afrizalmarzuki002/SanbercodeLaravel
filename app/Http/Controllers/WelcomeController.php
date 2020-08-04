<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
     public function welcome(Request $request)
    {
    	$firstname = $request->input('firstname');
    	$lastname = $request->input('lastname');
    	$users = $firstname . " " . $lastname;

    	return view('welcome', ['users' => $users]);
    }
}
