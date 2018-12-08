<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    public $primaryKey = 'categories_id';
    public $timestamps = false;
}
