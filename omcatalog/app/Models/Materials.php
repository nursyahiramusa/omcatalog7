<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table = 'materials';
    public $primaryKey = 'materials_id';
    public $timestamps = false;
}
