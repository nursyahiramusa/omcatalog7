<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    public $primaryKey = 'images_id';
    public $timestamps = false;
	
	public function materials()
    {
    	return $this->belongsTo('App\Models\Materials', 'materials_id', 'materials_id');
    }
}
