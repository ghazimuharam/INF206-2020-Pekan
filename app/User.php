<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NotificationChannels\WebPush\HasPushSubscriptions;

class User extends Authenticatable
{
    use Notifiable,HasPushSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','market_name','vehicle_name','vrn','mitra_status','roles_id'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne('App\Role', 'id','roles_id');
    }

    public function userOrderHistory()
    {
        return $this->hasMany('App\Order', 'user_id','id');
    }

    public function sellerOrderHistory()
    {
        return $this->hasMany('App\Order', 'seller_id','id');
    }

    public function stock()
    {
        return $this->hasMany('App\Stock', 'user_id','id');
    }
}
