<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internal_personnel extends Model
{
    protected $fillable = [
        'IP_user',
        'IP_pass',
        'IP_name',
        'IP_lname',
        'IP_position',
        'IP_faculty',
        'IP_department',
        'IP_institution',
        'IP_tel',
        'IP_email'
      ];
}
