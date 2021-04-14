<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:25'],
            'statut' => ['required', 'string'],
            'firstname'=>['required','string','max:25'],
            'telephone'=>['required','string','max:16'],
            'role'=>['integer'],
            'CP'=>['integer','required'],
            'Ville'=>['string','max:25'],
            'adresse'=>['required','string','max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'firstname'=>$input['firstname'],
            'name' => $input['name'],
            'ville'=> $input['ville'],
            'adresse'=> $input['adresse'],
            'CP'=> $input['CP'],
            'email' => $input['email'],
            'statut'=> $input['statut'],
            'role'=>$input['role'],
            'telephone'=>$input['telephone'],
            'password' => Hash::make($input['password']),

        ]);
        
    }
}
