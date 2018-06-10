<?php

namespace MMORATE;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MMORATE\Servers;

class User extends Authenticatable
{
    use Notifiable;

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Возвращает кол-во серверов пользователя
     *
     * @return mixed
     */
    public function servers(){
        return Servers::where('user_id', $this->id)->count();
    }

}
