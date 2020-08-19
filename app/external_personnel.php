<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class External_personnel extends Model
{
    protected $fillable = [
        'EP_user',
        'EP_pass',
        'EP_name',
        'EP_position',
        'EP_tel',
        'EP_institution'
       
      ];
      protected $primaryKey = 'EP_id';
}
