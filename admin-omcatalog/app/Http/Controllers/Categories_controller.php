<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Categories;
use App\Models\Materials;
use App\Models\Images;
use App\Models\Base64;

class categories_controller extends Controller
{
    public function index()
    {
    	$title = 'List of Categories';
    	$categoriess = categories::orderBy('name', 'asc')->get();
		$materialss = materials::orderBy('name', 'asc')->get();

    	return view('categories.categories_index', compact('title', 'categoriess','materialss'));
    }

    public function create()
    {
        $title = 'Create categories';

        return view('categories.categories_create', compact('title'));
    }

    public function store(Request $request)
    {
        $kt = new categories;
        $kt->name = $request->name;
        $kt->save();

        Session::flash('pesan', 'Successfully added.');

        return redirect('categories');
    }

    public function edit($categories_id)
    {
    	$title = 'Edit categories';
    	$categories = categories::where('categories_id', $categories_id)->first();

    	return view('categories.categories_edit', compact('title', 'categories'));
    }

    public function update(Request $request, $categories_id)
    {
    	$this->validate($request, [
    		'name'=>'required'
    	]);

    	$categories = categories::where('categories_id', $categories_id)->first();
    	$categories->name = $request->name;
    	$categories->save();

    	Session::flash('pesan', 'Successfully updated.');

    	return redirect('categories');
    }

    public function delete($materials_id,$categories_id)
    {
		//images::where('materials_id', $materials_id)->delete();
		//base64::where('materials_id', $materials_id)->delete();
		materials::where('categories_id', $categories_id)->delete();
    	categories::where('categories_id', $categories_id)->delete();

    	Session::flash('pesan', 'Successfully deleted.');

    	return redirect('categories');
    }
}