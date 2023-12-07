<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\UploadFile;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class ProductController extends Controller
{

use UploadFile;

    public function home()
    {
		$products = Product::with('category', 'file')->get();
		// $products_Category1 = Product::where('category_id', 1)->get();
		$products_Category1 = Product::with('file')->where('category_id', 1)->get();


		$products_Categorydos = Product::with('file')->where('category_id', 2)->get();

		$products_Categorytres = Product::with('file')->where('category_id', 3)->get();
		$products_Categorycuatro = Product::with('file')->where('category_id', 4)->get();
		return view('index', compact('products','products_Category1',
		'products_Categorydos','products_Categorytres','products_Categorycuatro'));

    }
    public function index()
    {
		$products = Product::with( 'category','file')->get();
		return view('products.index', compact('products'));

    }




    public function store(ProductRequest $request)
    {
	try {
	DB::beginTransaction();
	$product = new Product($request->all());
	$product->save();
	$this->uploadFile($product, $request);
	DB::commit();
	return response()->json([], 200);

} catch (\Throwable $th) {
	DB::rollback();
	throw $th;
}

    }


	public function showPublic($id)
{
    // Lógica para mostrar detalles del producto sin autenticación
    $product = Product::with('file')->find($id);

		// Verifica si el producto existe


		// Devuelve la vista de detalles con el producto individual
		return view('products.Detail', compact('product'));
}


	public function show($id)
	{
		// Obtén un solo producto por su ID con la relación 'file' cargada
		$product = Product::with('file')->find($id);

		// Verifica si el producto existe


		// Devuelve la vista de detalles con el producto individual
		return view('products.Detail', compact('product'));
	}


    public function edit($id)
    {
        //
    }


    public function update(ProductUpdateRequest $request, Product $product)
    {

		try {
			DB::beginTransaction();
			$product->update($request->all());
			$this->uploadFile($product, $request);

			DB::commit();

			return response()->json([], 204);
		} catch (\Throwable $th) {
			DB::rollback();
			throw $th;
		}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
		$this->deleteFile($product);
		return response()->json([], 204);
    }
	public function productoElectronico()
{
	$Electronicos = Product::where('category_id', 1)->get();

	return view('index', compact('Electronicos'));
}


}
