<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class CustomerModel extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name', 'email', 'profile', 'password', 'email_verification_status', 'email_verification_date', 'verification_token', 'active_status'];
}
