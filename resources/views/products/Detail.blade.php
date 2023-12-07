<x-app title="Detalle Producto">
	<section class="my-3 d-flex justify-content-center">
        <h1>Detalles del producto</h1>
    </section name="Electronica">
    <section class="d-flex flex-wrap justify-content-center">
        <div class="d-flex my-4 justify-content-center">
            <div class="mx-1 my-3">
                <div class="card mx-1 my-3 ">
                    <div class="card-body d-flex">
                        <div class="mr-3">
                            {{-- Imagen a la izquierda --}}
                            <img src="{{ $product->file['route'] }}" class="card-img-top img_size" alt="Portada Libro">
                        </div>
                        <div>
							<div class="mx-3 my-3 cardDetails">

								{{-- Datos a la derecha --}}
                            <h3 class="card-title">{{ $product->name }}</h3>
                            <p class="card-text"><strong>Precio:</strong> ${{ $product->price }}</p>
                            <p class="card-text"><strong>Descripción:</strong> {{ $product->description }}</p>
                            <p class="card-text"><strong>Stock:</strong> {{ $product->stock }}</p>
                            <!-- Otro contenido del producto -->
						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
