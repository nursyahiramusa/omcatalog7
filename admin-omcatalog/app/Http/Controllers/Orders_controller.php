<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\orders;
use App\Models\Confirmations;

class orders_controller extends Controller
{
    public function index()
    {
    	$title = 'List of orders';
    	$confirmationss = confirmations::orderBy('confirmations_id', 'desc')->get();

    	return view('orders.orders_index', compact('title', 'confirmationss'));
    }
}
