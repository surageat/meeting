<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offices extends Model
{
    protected $fillable = [
        'OF_user',
        'OF_pass',
        'OF_name',
        'OF_lname',
        'OF_rank',
        'OF_department',
        'OF_institution',
        'OF_tel',
        'OF_email',
        'OF_status'

      ];
      protected $primaryKey = 'id';
}
