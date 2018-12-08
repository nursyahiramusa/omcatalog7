<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table = 'materials';
    public $primaryKey = 'materials_id';
    public $timestamps = false;

    public function categories()
    {
    	return $this->belongsTo('App\Models\Categories', 'categories_id', 'categories_id');
    }

    public function gambar()
    {
    	return $this->hasOne('App\Models\Images', 'materials_id', 'materials_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id', 'status_id');
    }
}
