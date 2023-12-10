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

	public function show($id)
	{

		$product = Product::with('file')->find($id);



		return view('products.Detail', compact('product'));
	}


    public function ShowProductCategory($category)
    {
		$products = Product::with('file')->where('category_id', $category)->get();

		return view('ProductCategory', compact('products'));
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

	public function search(Request $request)
	{
		$term = $request->input('term');


		$searchResults = Product::where('name', 'like', '%' . $term . '%')->get();

		return view('search.index', compact('searchResults', 'term'));
	}




    public function destroy(Product $product)
    {
        $product->delete();
		$this->deleteFile($product);
		return response()->json([], 204);
    }
	


}
