<?php

    namespace App;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    

    class User extends Authenticatable
    {
        use Notifiable;

        // protected $guard = 'users';

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

        protected $hidden = [
            'password', 'remember_token',
        ];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        protected $table ='admin';

        protected $primaryKey = 'id';
    }