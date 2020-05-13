<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'user_id', 'type_pasar','nama_barang'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
