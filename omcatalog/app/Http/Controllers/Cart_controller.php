<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

use App\Models\Materials;
use App\Models\Orders;
use App\Models\Ordermaterials;
// use App\Cart;
use Cart;

class cart_controller extends Controller
{
    public function index()
    {
    	$title = 'Shopping Cart';
    	$materialss = Cart::content();
    	//dd($materialss);

    	return view('shop.shopping_cart', compact('materialss'));
    }

    public function destroy()
    {
        Cart::destroy();

        Session::flash('pesan', 'carts berhasil dikosongkan');

        return redirect('shopping-cart');
    }

    public function update($rowId)
    {
		$item = Cart::get($rowId);
		//dd($item);
    	Cart::update($rowId, ['qty'=>$item->qty + 1]);
		//dd($item);
    	return redirect()->back();
    }

    public function kurangi($rowId)
    {
    	$item = Cart::get($rowId);
    	Cart::update($rowId, ['qty'=>$item->qty - 1]);

    	return redirect()->back();
    }

    public function checkout()
    {
    	return view('shop.checkout');
    }

    public function bayar(Request $request)
    {
    	$users_id = Auth::user()->users_id;
    	$receiver_name = $request->receiver_name;
    	$address = $request->address;
    	$totalPay = 0;

    	$carts = Cart::content();
    	foreach ($carts as $cart) {
    		$totalPay += $cart->subtotal;
    	}

    	$orders = new Orders;
    	$orders->users_id = $users_id;
    	$orders->receiver_name = $receiver_name;
    	$orders->address = $address;
    	$orders->totalPay = $totalPay;
		$ldate = date('Y-m-d H:i:s');
		$orders->date = $ldate;
    	$orders->save();

    	foreach ($carts as $cart) {
    		$ordermaterials = new Ordermaterials;
    		$ordermaterials->orders_id = $orders->orders_id;
    		$ordermaterials->materials_id = $cart->id;
    		$ordermaterials->qty = $cart->qty;
    		$ordermaterials->subtotal = $cart->subtotal;
    		$ordermaterials->save();
    	}

    	// Cart::destroy();

    	return redirect('invoice');
    }
}
?>
