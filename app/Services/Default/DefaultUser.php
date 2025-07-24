<?php

namespace App\Services\Default;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUser
{
    /**
     * Créer l'utilisateur par défaut.
     * @return User
     */
    public static function create() : User
    {
        return User::create([
            'name' => config('app.name'),
            'phone' => config('app.phone'),
            'email' => config('mail.from.address'),
            'role' => 'admin',
            'is_active' => true,
            'password' => Hash::make('password')
        ]);
    }
}