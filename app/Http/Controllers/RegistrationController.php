<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
   public function create(){
       return view('registration.create');
   }
   
   
   public function store(){
       
       //Request data validation
       $this->validate(request(), [
          'name'=>'required',
          'email'=>'required|email',
           'password'=>'required|confirmed',
       ]);
       
       //insert Data user table
       $user=User::create([
           'name' => request('name'),
           'email' => request('email'),
           'password' => bcrypt(request('password'))
       ]);
       //Sign in user
       auth()->login($user);
       
       //Redrec page
       return redirect()->home();
       
   }
}
