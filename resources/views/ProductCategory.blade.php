<x-app>
{{-- SOLO HICE LA PARTE NUMERO UNO DE LAS CATEGORIAS --}}
	<section class="d-flex flex-wrap justify-content-center">
		@foreach ($products as $product)

								<div class="mx-1 my-3 ">
									<div class="card mx-1 my-3 card_size">
										{{-- @if (is_array($product['file'])) --}}
											<img src="{{ $product['file']['route'] }}" class="card-img-top"
												alt="Portada Libro">
										{{-- @endif --}}
										<div class="card-body">
											<h2 class="h5">{{Str::limit( $product['name'],10 )}}</h2>
											<h2 class="h5">{{ $product['price'] }}</h2>
											<p>{{Str::limit( $product['description'],40 )}}</p>



											<div class="d-flex justify-content-end">
												<a href="{{ route('products.showPublic', ['product' => $product['id']]) }}"
													class="btn btn-primary btn-sm  mr-2"><i class="fa-solid fa-eye"></i></a>

												<form action="{{ route('add') }}" method="post">
													@csrf
													<input type="hidden" name="id" value="{{ $product['id'] }}">
													<button type="submit" name="btn" class="btn btn-success btn-sm ms-2 justify-content-end">
														<i class="fas fa-cart-shopping"></i>
												</form>
											</div>
										</div>
									</div>
								</div>
							@endforeach

    </section>
</x-app>


