<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\materials;
// use App\Cart;
use Cart;

class Beranda_controller extends Controller
{
    public function index()
    {
    	$materialss = materials::orderBy('materials_id', 'desc')->where('status_id', 1)->get();

    	return view('beranda', compact('materialss'));
    }

    public function addToCart(Request $request, $id)
    {
    	$materials = materials::find($id);
    	Cart::add(['id'=>$materials->materials_id, 'name'=>$materials->name, 'qty'=>1, 'price'=>$materials->price]);

        Session::flash('pesan', 'Successfully added to cart.');

    	// $request->session()->put('cart', $cart);
    	// dd($request->session()->get('cart'));
        // dd(Cart::content());
    	return redirect()->back();
    }

    public function categories($categories_id)
    {
        $materialss = materials::orderBy('name', 'asc')->where('categories_id', $categories_id)->where('status_id', 1)->get();

        return view('beranda', compact('materialss'));
    }

    public function show($materials_id)
    {
        $materials = materials::where('materials_id', $materials_id)->first();

        return view('materials_detail', compact('materials'));
    }
}
