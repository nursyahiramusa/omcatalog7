<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Materials;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Base64;

class materials_controller extends Controller
{
    public function index()
    {
    	$title = 'List of materials';
    	$materialss = materials::orderBy('name', 'asc')->get();

    	return view('materials.materials_index', compact('title', 'materialss'));
    }

    public function habis()
    {
        $title = 'Sold out materials';
        $materialss = materials::orderBy('name', 'asc')->where('stock', '=', 0)->get();

        return view('materials.materials_index', compact('title', 'materialss'));
    }

    public function show($materials_id)
    {
    	$title = 'Material details';
    	$materials = materials::where('materials_id', $materials_id)->first();

    	return view('materials.materials_show', compact('title', 'materials'));
    }

    public function create()
    {
    	$title = 'Add materials';
    	$categoriess = categories::orderBy('name', 'asc')->get();

    	return view('materials.materials_create', compact('title', 'categoriess'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'categories_id' => 'required',
            'images' => 'required',
            'stock' => 'required',
            'status' => 'required',
        ]);

        $materials = new materials;
        $materials->name = $request->name;
        $materials->price = $request->price;
        $materials->description = $request->description;
        $materials->categories_id = $request->categories_id;
        $materials->stock = $request->stock;
        $materials->status_id = $request->status;
        $materials->save();

        if($files=$request->file('images')){
            $name=$files->getClientOriginalName();
            $files->move('image',$name);

            // base64 encode
            $base64 = base64_encode(asset('image/'.$name));
            $base = new Base64;
            $base->materials_id = $materials->materials_id;
            $base->name = $base64;
            $base->save();

            $images = new images;
            $images->materials_id = $materials->materials_id;
            $images->name = $name;
            $images->save();
        }

        Session::flash('pesan', 'Successfully added.');

        return redirect('materials');
    }

    public function edit($materials_id)
    {
    	$title = 'Edit materials';
    	$materials = materials::where('materials_id', $materials_id)->first();
    	$categoriess = categories::orderBy('name', 'asc')->get();

    	return view('materials.materials_edit', compact('title', 'materials', 'categoriess'));
    }

    public function update(Request $request, $materials_id)
    {
    	$this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'categories_id' => 'required',
            'stock' => 'required',
            'status' => 'required',
        ]);

    	$materials = materials::where('materials_id', $materials_id)->first();
    	$materials->name = $request->name;
    	$materials->description = $request->description;
    	$materials->price = $request->price;
    	$materials->categories_id = $request->categories_id;
    	$materials->stock = $request->stock;
        $materials->status_id = $request->status;
    	$materials->save();

    	if($files=$request->file('images')){
            $name=$files->getClientOriginalName();
            $files->move('image',$name);
            
            $images = new Images;
            $images->materials_id = $materials->materials_id;
            $images->name = $name;
            $images->save();
        }

    	Session::flash('pesan', 'Successfully updated.');

    	return redirect('materials');
    }

    public function delete($materials_id)
    {
        images::where('materials_id', $materials_id)->delete();
		base64::where('materials_id', $materials_id)->delete();
		materials::where('materials_id', $materials_id)->delete();

    	Session::flash('pesan', 'Successfully deleted.');

    	return redirect('materials');

    }
}
