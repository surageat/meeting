<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model

  {
    protected $fillable = [
      'C_meet',
      'Meet_id',
      'OF_id'
    ];
    //
    protected $primaryKey = 'id';
  
  //
  }
