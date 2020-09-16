<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'lname',
        'rank',
        'tel',
        'email',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table ='admin';
    protected $primaryKey = 'id';


}
