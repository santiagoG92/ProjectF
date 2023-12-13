
{{-- Menu --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Tienda</a>

        {{-- Haburguesa --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

			 <form action="{{ route('search') }}" class="form-inline d-flex form_size" method="GET">
				<input class="form-control mr-sm-2" type="search" name="term" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger ms-2 my-2 my-sm-0" type="submit">Buscar</button>
			</form>



            <!-- Right Side Of Navbar -->


				<ul class="navbar-nav ms-auto">
					{{-- <li class="nav-item">
						<a class="nav-link" href="{{ route('checkout') }}">Carrito </i><span class="badge bg-danger">{{\Cart::count()}}</span></a>

					</li> --}}


                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registro</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->full_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @role('admin')
                                {{-- Users --}}
                                <a
								class="dropdown-item" href="{{ route('users.index') }}">Usuarios

							</a>
							@endrole


                            {{-- @role('admin')

								 <a href="{{route('cart.index')}}">cart</a>

							@endrole --}}

                             @role('admin')
                                {{-- Users --}}
                                <a class="dropdown-item" href="{{ route('products.index') }}">Productos</a>

                            @endrole
							@can('categories.index')

							{{-- Category Products --}}
							<a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a>

							@endcan

								<a class="dropdown-item" href="{{route('cart.index')}}" >Carrito De compras</a>


                            {{-- Logout --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir
                             </a>



                            {{-- Category Products --}}
                            {{-- <a class="dropdown-item" href="/category-products/index">Category Products</a> --}}


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
