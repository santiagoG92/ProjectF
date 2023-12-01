<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
		$products = Product::get();
		$products_Category1 = Product::where('category_id', 1)->get();

		$products_Categorydos = Product::where('category_id', 2)->get();

		$products_Categorytres = Product::where('category_id', 3)->get();
		$products_Categorycuatro = Product::where('category_id', 4)->get();
		return view('index', compact('products','products_Category1',
		'products_Categorydos','products_Categorytres','products_Categorycuatro'));

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	public function productoElectronico()
{
	$Electronicos = Product::where('category_id', 1)->get();

	return view('index', compact('Electronicos'));
}


}
