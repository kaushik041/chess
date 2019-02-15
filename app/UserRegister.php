<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    //
    protected $fillable = [
        'full_name',
        'guardian_name',
        'dob',
        'phone',
        'email',
        'gender',
        'address',
        'dist',
        'joidId'

    ];
}
