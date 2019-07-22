<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     //são atributos,- quais atributos podemos preencher(se eu colocar 3 colunas mesmo tendo 25, o larável só pode mexer nesses campos definidos)
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //garantir que os atributos não vão ser expostos a todo momento, a gente garante que eles estarão criptografados
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //ele recebe uma data e garante que essa data vai estar no formato do banco.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
