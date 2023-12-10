<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{

    public function index()
    {
        //
    }
    public function add(Request $request)
    {
        $producto=Product::find($request->id);
		if(empty($producto))
		return redirect('Cart');
		Cart::add(
			$producto->id,
			$producto->name,
			1,
			$producto->price,
			// $producto->description,
			['description' => $producto->description,'image' => $producto['file']['route']]


		);
		return redirect()->back()->with("success","agregado:". $producto->name);

	// dd($producto);
    }
	public function checkout()
{
	return view('Cart');
}

    public function removeitem(Request $request)

    {
        Cart::remove($request->rowId);
		return redirect()->back()->with("success","Eliminado!");
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
}
