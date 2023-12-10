<x-app title="Tienda">

	<section class="my-3 d-flex justify-content-center">
		<h1>Electronica</h1>
    </section name="Electronica">

    <section name="carouselOne" class="d-flex flex-wrap justify-content-center">
		<a href="{{ route('products.ShowProductCategory', ['category' => 1]) }}" class="d-flex justify-content-center mx-5 text-decoration-none text-reset">
			<div class="transparent-text">
				VER TODAS..
			</div>
		</a>
		<div id="carouselExample1" class="carousel carousel-dark slide carousel_size">
			<div class="carousel-inner">

				@php
                    $productsChunks = array_chunk($products_Category1->toArray(), 5);
					@endphp

@foreach ($productsChunks as $chunk)
<div class="carousel-item {{ $loop->first ? 'active' : '' }}">

	<div class="d-flex flex-wrap align-items-center justify-content-center">


                            @foreach ($chunk as $product)
                                <div class="mx-1 my-3 ">
                                    <div class="card mx-1 my-3 card_size">
                                        @if (is_array($product['file']))
                                            <img src="{{ $product['file']['route'] }}" class="card-img-top"
                                                alt="Portada Libro">
                                        @endif
                                        <div class="card-body">
                                            <h2 class="h5">{{ Str::limit($product['name'], 10) }}</h2>
                                            <h2 class="h5">{{ $product['price'] }}</h2>
                                            <p>{{ Str::limit($product['description'], 40) }}</p>



                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('products.showPublic', ['product' => $product['id']]) }}"
                                                    class="btn btn-primary btn-sm  mr-2"><i
                                                        class="fa-solid fa-eye"></i></a>

                                                <form action="{{ route('add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                                                    <button type="submit" name="btn"
                                                        class="btn btn-success btn-sm ms-2 justify-content-end">
                                                        <i class="fas fa-cart-shopping"></i>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>









    {{-- Seccion de foreach mas carrusel de categoria numero dos --}}

    <section class="my-3 d-flex justify-content-center">
		<h1>Electrodomesticos</h1>
    </section name="Electronica">
    <section name="carruselTwo"class="d-flex flex-wrap justify-content-center">
		<a href="{{ route('products.ShowProductCategory', ['category' => 2]) }}" class="d-flex justify-content-center mx-5 text-decoration-none text-reset">
			<div class="transparent-text">
				VER TODAS..
			</div>
		</a>

        <div id="carouselExample2" class="carousel carousel-dark slide carousel_size">
            <div class="carousel-inner">

                @php
                    $productsChunks = array_chunk($products_Categorydos->toArray(), 5);
                @endphp

                @foreach ($productsChunks as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="d-flex flex-wrap align-items-center justify-content-center">

                            @foreach ($chunk as $product)
                                <div class="mx-1 my-3 ">

                                    <div class="card mx-1 my-3 card_size">
                                        @if (is_array($product['file']))
                                            <img src="{{ $product['file']['route'] }}" class="card-img-top"
                                                alt="Portada Libro">
                                        @endif
                                        <div class="card-body">
                                            <h2 class="h5">{{ Str::limit($product['name'], 10) }}</h2>
                                            <h2 class="h5">{{ $product['price'] }}</h2>

                                            <p>{{ Str::limit($product['description'], 40) }}</p>


                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('products.showPublic', ['product' => $product['id']]) }}"
                                                    class="btn btn-primary btn-sm  mr-2"><i
                                                        class="fa-solid fa-eye"></i></a>

                                                <form action="{{ route('add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                                                    <button type="submit" name="btn"
                                                        class="btn btn-success btn-sm ms-2 justify-content-end">
                                                        <i class="fas fa-cart-shopping"></i>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                data-bs-slide="next">
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
		<a href="{{ route('products.ShowProductCategory', ['category' => 3]) }}" class="d-flex justify-content-center mx-5 text-decoration-none text-reset">
		<div class="transparent-text">
			VER TODAS..
		</div>
		</a>
        <div id="carouselExample3" class="carousel carousel-dark slide carousel_size">
            <div class="carousel-inner">

                @php
                    $productsChunks = array_chunk($products_Categorytres->toArray(), 5);
                @endphp

                @foreach ($productsChunks as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="d-flex flex-wrap align-items-center justify-content-center">

                            @foreach ($chunk as $product)
                                <div class="mx-1 my-3 ">

                                    <div class="card mx-1 my-3 card_size">
                                        @if (is_array($product['file']))
                                            <img src="{{ $product['file']['route'] }}" class="card-img-top"
                                                alt="Portada Libro">
                                        @endif
                                        <div class="card-body">
                                            <h2 class="h5">{{ Str::limit($product['name'], 10) }}</h2>
                                            <h2 class="h5">{{ $product['price'] }}</h2>

                                            <p>{{ Str::limit($product['description'], 40) }}</p>

                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('products.showPublic', ['product' => $product['id']]) }}"
                                                    class="btn btn-primary btn-sm  mr-2"><i
                                                        class="fa-solid fa-eye"></i></a>

                                                <form action="{{ route('add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ $product['id'] }}">
                                                    <button type="submit" name="btn"
                                                        class="btn btn-success btn-sm ms-2 justify-content-end">
                                                        <i class="fas fa-cart-shopping"></i>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                data-bs-slide="next">
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
		<a href="{{ route('products.ShowProductCategory', ['category' => 4]) }}" class="d-flex justify-content-center mx-5 text-decoration-none text-reset">
			<div class="transparent-text">
				VER TODAS..
			</div>
		</a>
        <div id="carouselExample4" class="carousel carousel-dark slide carousel_size">
            <div class="carousel-inner">

                @php
                    $productsChunks = array_chunk($products_Categorycuatro->toArray(), 5);
                @endphp

                @foreach ($productsChunks as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="d-flex flex-wrap align-items-center justify-content-center">

                            @foreach ($chunk as $product)
                                <div class="mx-1 my-3 ">

                                    <div class="card mx-1 my-3 card_size">
                                        @if (is_array($product['file']))
                                            <img src="{{ $product['file']['route'] }}" class="card-img-top"
                                                alt="Portada Libro">
                                        @endif
                                        <div class="card-body">
                                            <h2 class="h5">{{ Str::limit($product['name'], 10) }}</h2>
                                            <h2 class="h5">{{ $product['price'] }}</h2>

                                            <p>{{ Str::limit($product['description'], 40) }}</p>

                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('products.showPublic', ['product' => $product['id']]) }}"
                                                    class="btn btn-primary btn-sm  mr-2"><i
                                                        class="fa-solid fa-eye"></i></a>

                                                <form action="{{ route('add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ $product['id'] }}">
                                                    <button type="submit" name="btn"
                                                        class="btn btn-success btn-sm ms-2 justify-content-end">
                                                        <i class="fas fa-cart-shopping"></i>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</x-app>
