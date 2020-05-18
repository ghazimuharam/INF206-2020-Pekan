<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'seller_id', 'type_pasar', 'status_order'
    ];

    public function checkUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function checkSeller()
    {
        return $this->belongsTo('App\User', 'seller_id', 'id');
    }
}
