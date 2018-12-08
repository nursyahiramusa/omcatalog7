<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base64 extends Model
{
    protected $table = 'base64';
    public $primaryKey = 'base64_id';
    public $timestamps = false;
}
