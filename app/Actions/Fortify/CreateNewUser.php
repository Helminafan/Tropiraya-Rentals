<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required',  'numeric',  'unique:users'],
            'telp' => ['required',  'numeric',  'unique:users'],
            'alamat' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $register = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'nik' => $input['nik'],
            'telp' => $input['telp'],
            'gender' => $input['gender'],
            'alamat' => $input['alamat'],
            'password' => Hash::make($input['password']),
        ]);
        $register->assignRole('user');
        return $register;
    }
}
