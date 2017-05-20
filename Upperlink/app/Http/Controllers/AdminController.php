<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        
        return view('login');
    }

    public function checklogin(Request $request)
    {

        $username=$request->username;
        $password=$request->password;
        if($username=="admin" AND $password=="0000")
        {
            $user = User::get();
        return view('view_applicant', compact('user'));

        }else{
            return "INCORRECT USERNAME OR PASSOWRD";
        }
        
    }
    
    public function get_applicant(Request $request)
    {
            }
}
