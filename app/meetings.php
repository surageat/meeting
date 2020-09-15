<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meetings extends Model
{
   
  protected $fillable = [
    
    'Meet_heading',
    'Meet_date',
    'Meet_no',
    'Meet_time',
    'Meet_place',
    'Meet_table',
    'admin_id',
    'MR_id',
  ];
  //
  protected $primaryKey = 'id';

//
}


    
