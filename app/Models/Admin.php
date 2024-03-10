<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'administrators';
    protected $fillable = ['name', 'email', 'password'];

    // Si deseas personalizar el guard, puedes agregar este método
    // public function guard()
    // {
    //     return Auth::guard('administrators');
    // }
}

