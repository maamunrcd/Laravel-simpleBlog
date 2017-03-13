<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Mail\Welcome;
use App\User;
class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ];
    }


    public function parsist(){
        //insert Data user table

        $user=User::create(
            $this->only(['name','email','password'])
        );
        //Sign in user
        auth()->login($user);


        //Send welcome email
        \Mail::to($user)->send(new Welcome($user));
    }
}
