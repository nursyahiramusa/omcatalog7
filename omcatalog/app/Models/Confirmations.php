<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirmations extends Model
{
    protected $table = 'confirmations';
    public $primaryKey = 'confirmations_id';
    public $timestamps = false;
}
