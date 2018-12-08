<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    public $primaryKey = 'status_id';
    public $timestamps = false;
}
