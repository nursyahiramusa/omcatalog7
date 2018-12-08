<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;

use App\Models\orders;
use App\Models\orders_materials;

class Invoice_controller extends Controller
{
    public function index()
    {
    	$materialss = Cart::content();
    	$total = Cart::total();
    	// dd($materialss);
    	Cart::destroy();
    	$users_id = Auth::user()->users_id;


    	return view('shop.invoice', compact('materialss', 'total'));
    }

    public function list()
    {
    	$users_id = Auth::user()->users_id;
    	$orderss = orders::where('users_id', $users_id)->orderBy('orders_id', 'desc')->get();

    	return view('user.invoice', compact('orderss'));
    }

    public function detail($orders_id)
    {
        $details = orders_materials::where('orders_id', $orders_id)->get();
        $orders = array();

        foreach ($details as $key => $detail) {
            $detailArray = array();
            $detailArray['nama_materials'] = $detail->materials->nama;
            $detailArray['quantity'] = $detail->quantity;
            $detailArray['subtotal'] = $detail->subtotal;
            array_push($orders, $detailArray);
        }

        return response()->json([
            'hasil'=>$orders
        ]);
    }
}
