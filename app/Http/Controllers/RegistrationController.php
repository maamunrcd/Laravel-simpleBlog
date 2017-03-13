<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
   public function create(){
       return view('registration.create');
   }
   
   
   public function store(RegistrationForm $form){

       //Request data validation this ququest get registractionRequest
//       $this->validate(request(), [
//          'name'=>'required',
//          'email'=>'required|email',
//           'password'=>'required|confirmed',
//       ]);

//       //insert Data user table
//       $user=User::create([
//           'name' => request('name'),
//           'email' => request('email'),
//           'password' => bcrypt(request('password'))
//       ]);
//       //Sign in user
//       auth()->login($user);
//
//
//       //Send welcome email
//       \Mail::to($user)->send(new Welcome($user));

       //Redrec page
       $form->parsist();

       session()->flash('message','Thanks so much your sign in!');

       return redirect()->home();
       
   }
}
