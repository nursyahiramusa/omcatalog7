<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

use App\User;
use App\Models\Confirmations;
use App\Models\Orders;

class Confirmations_controller extends Controller
{
    public function index()
    {
    	return view('confirmations.confirmations_index');
    }

    public function store(Request $request)
    {
    	$users_id = Auth::user()->users_id;
    	$orders_id = $request->orders_id;

    	if($files=$request->file('images')){
            $name=$files->getClientOriginalName();
            $files->move('image',$name);

            // base64 encode
            $base64 = base64_encode(asset('image/'.$name));
            $base = new confirmations;
            $base->users_id = $users_id;
            $base->orders_id = $orders_id;
            $base->images = $base64;
            $base->save();
        }

        $orders = orders::where('orders_id', $orders_id)->first();
        $orders->status_invoice_id = 2;
        $orders->save();

        Session::flash('Order', 'Pending confirmation.');

        return redirect('invoice/list');
    }
}
