<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class confirmations extends Model
{
    protected $table = 'confirmations';
    public $primaryKey = 'confirmations_id';
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User', 'users_id', 'users_id');
    }

    public function orders()
    {
    	return $this->belongsTo('App\Models\Orders', 'orders_id', 'orders_id');
    }
}
