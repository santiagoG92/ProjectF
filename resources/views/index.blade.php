
<x-app title="Tienda">
    <section class="my-3 d-flex justify-content-center">
        <h1>Electronica</h1>
    </section name="Electronica">

    <section name="carruselOne"class="d-flex flex-wrap justify-content-center">
		<div id="carouselExample1" class="carousel carousel-dark slide carousel_size">
			<div class="carousel-inner">

				@php
					$productsChunks = array_chunk($products_Category1->toArray(), 3);
				@endphp

				@foreach ($productsChunks as $chunk)
					<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
						<section class="d-flex flex-wrap justify-content-center">
							@foreach ($chunk as $product)
								<div class="card mx-2 my-3 card_size">
									<div class="card-header">
										<h2 class="h5">{{ $product['name'] }}</h2>
									</div>
									<div class="card-body">
										<p>{{Str::limit( $product['description'],40 )}}</p>
									</div>
									<div class="card-footer">
										<button class="btn btn-primary">Solicitar</button>
									</div>
								</div>
							@endforeach
						</section>
					</div>
				@endforeach

			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>










		{{-- Seccion de foreach mas carrusel de categoria numero dos --}}

		<section class="my-3 d-flex justify-content-center">
			<h1>Electrodomesticos</h1>
		</section name="Electronica">
		<section name="carruselTwo"class="d-flex flex-wrap justify-content-center">
			@php
						$productsdos = array_chunk($products_Categorydos->toArray(), 3);
						@endphp
		<div id="carouselExample2" class="carousel carousel-dark slide carousel_size">

			<div class="carousel-inner">

					@foreach ($productsdos as $chunks)
						<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
							<section class="d-flex flex-wrap justify-content-center">
								@foreach ($chunks as $product)
									<div class="card mx-2 my-3 card_size">
										<div class="card-header">
											<h2 class="h5">{{ $product['name'] }}</h2>
										</div>
										<div class="card-body">
											<p>{{Str::limit( $product['description'],40 )}}</p>
										</div>
										<div class="card-footer">
											<button class="btn btn-primary">Solicitar</button>
										</div>
									</div>
								@endforeach
							</section>
						</div>
					@endforeach

				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prevs">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>



{{-- Seccion de foreach mas carrusel de categoria numero tres --}}
		<section class="my-3 d-flex justify-content-center">
			<h1>Libros</h1>
		</section name="Electronica">
	<section name="elThree"class="d-flex flex-wrap justify-content-center">
		@php
					$productTres = array_chunk($products_Categorytres->toArray(), 3);
					@endphp
	<div id="carouselExample3" class="carousel carousel-dark slide carousel_size">

		<div class="carousel-inner">

				@foreach ($productTres as $chunks)
					<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
						<section class="d-flex flex-wrap justify-content-center">
							@foreach ($chunks as $product)
								<div class="card mx-2 my-3 card_size">
									<div class="card-header">
										<h2 class="h5">{{ $product['name'] }}</h2>
									</div>
									<div class="card-body">
										<p>{{Str::limit( $product['description'],40 )}}</p>
									</div>
									<div class="card-footer">
										<button class="btn btn-primary">Solicitar</button>
									</div>
								</div>
							@endforeach
						</section>
					</div>
				@endforeach

			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prevs">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>





{{-- Seccion de foreach mas carrusel de categoria numero cuatro --}}
	<section class="my-3 d-flex justify-content-center">
		<h1>Juguetes</h1>
	</section name="Electronica">
<section name="four"class="d-flex flex-wrap justify-content-center">
	@php
				$productcuatro = array_chunk($products_Categorycuatro->toArray(), 3);
				@endphp
<div id="carouselExample4" class="carousel carousel-dark slide carousel_size">

	<div class="carousel-inner">

			@foreach ($productcuatro as $chunks)
				<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
					<section class="d-flex flex-wrap justify-content-center">
						@foreach ($chunks as $product)
							<div class="card mx-2 my-3 card_size">
								<div class="card-header">
									<h2 class="h5">{{ $product['name'] }}</h2>
								</div>
								<div class="card-body">
									<p>{{Str::limit( $product['description'],40 )}}</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">Solicitar</button>
								</div>
							</div>
						@endforeach
					</section>
				</div>
			@endforeach

		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prevs">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample4 " data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
	</section>

</x-app>
