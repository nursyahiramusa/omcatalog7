<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordermaterials extends Model
{
    protected $table = 'ordermaterials';
    public $primaryKey = 'ordermaterials_id';
    public $timestamps = false;

    public function materials()
    {
    	return $this->belongsTo('App\Models\Materials', 'materials_id', 'materials_id');
    }

    public function orders()
    {
    	return $this->belongsTo('App\Models\Orders', 'orders_id', 'orders_id');
    }
}
