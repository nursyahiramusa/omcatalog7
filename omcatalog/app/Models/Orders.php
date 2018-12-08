<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    public $primaryKey = 'orders_id';
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User', 'users_id', 'users_id');
    }

    public function status()
    {
    	return $this->belongsTo('App\Models\Status_invoice', 'status_invoice_id', 'status_invoice_id');
    }
}
