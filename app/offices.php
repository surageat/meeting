<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offices extends Model
{
//
//   const ADMIN_TYPE = "ผู้ดูแลระบบ";
//   const USER_TYPE = "บุคคลากรภายใน";
//   const DEFAULT_TYPE = "บุคคลากรภายนอก";

// //
//   public function isAdmin()
//   {
//     return $this->type === self::ADMIN_TYPE;
//   }
//   public function isUser()
//   {
//     return $this->type === self::USER_TYPE;
//   }

//
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
    'OF_status',

  ];
  protected $hidden = [
    'password', 'remember_token',
];
  //
  protected $primaryKey = 'id';

//
}
