<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    protected $table = 'logistic';

    protected $fillable = [
        'logistic_name', 'address', 'office_phone', 'email'
    ];
}
