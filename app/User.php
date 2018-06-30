<?php

namespace MMORATE;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    protected $fillable = [
        'name', 'email', 'password'
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
    public function servers()
    {
        return Servers::where('user_id', $this->id)->count();
    }

    /**
     * Возвращает номер пользователя для СМСЦ
     *
     * @return mixed
     */
    public function routeNotificationForSmscRu()
    {
        return $this->phone;
    }

}
