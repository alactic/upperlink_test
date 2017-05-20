<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class MyController extends Controller
{
    public function new_applicant(Request $request)
    {
        $user = User::all()->count();
        if($user==4)
        {
            return "Application Closed";
        }

        return view('new_applicant');
    }

    public function send_form(Request $request)
    {
        $user=new User();
        $firstname=$request->firstname;
        $surname=$request->surname;
        $phone=$request->phone;
        $email=$request->email;
        //$firstname=$request->firstname;
        $passport=$request->passport;
           $destinationPath = 'uploads';
           if($request->file('passport') && $request->file('passport')->isValid()) 
           {
               if($request->file('passport')) {

               $thumbnailFileName = $request->file('passport')->getClientOriginalName();
               
                $request->file('passport')->move($destinationPath, $thumbnailFileName);
                $fullPath = $destinationPath. '/'.$thumbnailFileName;
                
            }
  
        }
  
        

        $user->email=$email;
        $user->firstname=$firstname;
        $user->firstname=$surname;
        $user->phone=$phone;
         $user->passport=$passport;
        $user->save();

        $user = User::all()->count();
        
         return \Redirect::route('new_applicant');
    }
}
