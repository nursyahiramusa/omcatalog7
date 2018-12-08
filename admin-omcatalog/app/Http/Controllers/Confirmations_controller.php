<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Confirmations;
use App\Models\Orders;
use App\Models\Ordersmaterials;
use App\Models\Materials;

class confirmations_controller extends Controller
{
    public function index()
    {
    	$title = 'Confirmation of payment';
    	$confirmationss = confirmations::orderBy('confirmations_id', 'desc')->get();
    	
    	return view('confirmations.confirmations_index', compact('title', 'confirmationss'));
    }

    public function detail($orders_id)
    {
    	$hasilArray = array('materials'=>array());

    	$orders = orders::where('orders_id', $orders_id)->first();
    	$hasilArray['receiver_name'] = $orders->receiver_name;
    	$hasilArray['address'] = $orders->address;

    	$materialss = ordermaterials::where('orders_id', $orders_id)->get();

    	foreach ($materialss as $key => $materials) {
    		$materialsArray = array();
    		$materialsArray['nama_materials'] = $materials->materials['name'];
    		$materialsArray['quantity'] = $materials->quantity;
    		$materialsArray['subtotal'] = number_format($materials->subtotal, 0);

    		array_push($hasilArray['materials'], $materialsArray);
    	}

    	return response()->json([
    		'hasil'=>$hasilArray
    	]);
    }

    public function terima($orders_id)
    {
        $orders = orders::where('orders_id', $orders_id)->first();
        $orders->status_invoice_id = 3;
        $orders->save();

        Session::flash('pesan', 'Confirmed.');

        return redirect('confirmations');
    }

    public function tolak($orders_id)
    {
        $orders = orders::where('orders_id', $orders_id)->first();
        $orders->status_invoice_id = 4;
        $orders->save();

        Session::flash('pesan', 'Confirmed.');

        return redirect('confirmations');
    }
}
