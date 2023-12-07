
<x-app>
<section class="my-3 d-flex justify-content-center">
	<h1>Mi Carrito De Compras</h1>
</section name="Electronica">
<section name="carouselOne" class="d-flex flex-wrap justify-content-center">
	<div >
		@if(Cart::count())
			<table class="table table-striped">
		<thead>
			<th>id</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio unitario</th>
			<th>Total</th>
			<th>Eliminar</th>

		</thead>
			<tbody>
				@foreach ( Cart::content() as $product)
					<tr class="align-middle">
						<td><img src="{{ $product->options['image'] }}" width="50"></td>						<td>{{$product->name}}</td>
						<td>{{$product->qty}}</td>
						<td>{{number_format($product->price,2)}}</td>
						<td>{{number_format($product->qty * $product->price,2)}}</td>
						<td>
								<form action="{{route('removeitem')}}" method="post">
								@csrf
								<input type="hidden" name="rowId" value="{{ $product->rowId }}">
<input type="submit" name="btn" class="btn btn-danger btn-sm" value="x">
							</form>
						</td>


					</tr>
				@endforeach
				<tr class="fw-bolder">
					<td colspan="4"></td>
					<td class="text-end">Total</td>
					<td class="text-end">{{Cart::subtotal()}}</td>
				</tr>

			</tbody>


			</table>
		@else
			<a href="/">Agrega un producto</a>
		@endif
		
	</div>
</section>
</x-app>