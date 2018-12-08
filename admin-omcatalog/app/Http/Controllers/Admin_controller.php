<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    public function index()
    {
    	$title = 'Dashboard';
    	$materials = \DB::table('materials')->get();
    	$total_materials = count($materials);

    	$orders = \DB::table('confirmations')->get();
    	$total_orders = count($orders);

    	return view('dashboard', compact('title', 'total_orders', 'total_materials'));
    }

    public function logout()
    {
    	\Auth::logout();

    	return redirect('login');
    }
}
