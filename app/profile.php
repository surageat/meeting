<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'OF_lname',
        'OF_rank',
        'OF_department',
        'OF_institution',
        'OF_tel',
        'email',
        'OF_status',
    
      ];
      protected $primaryKey = 'id';
}
