<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;
    // En tu modelo Cliente
    protected $table = 'clientes';
protected $fillable = ['nombres', 'apellidos', 'email', 'password'];

}
