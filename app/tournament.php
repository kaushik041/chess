<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournament extends Model
{
    //
    protected $fillable = [
        't_name',
        't_desc',
        't_date',
        't_time',
        't_place',
        't_fees',
        't_prize',
    ];
}
