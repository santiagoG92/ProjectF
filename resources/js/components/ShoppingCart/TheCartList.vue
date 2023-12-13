<!-- TheCartList.vue -->

<template>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(product, sc) in cart" :key="sc">
          <td>{{ product.name }}</td>
          <td>${{ product.price }}</td>
          <td>{{ product.quantity }}</td>
		  <td>

			<button @click="clearShowCart(sc)" class="btn btn-danger ">x</button>

		  </td>

        </tr>
      </tbody>
    </table>

<tr >
	<div class="d-flex justify-content-end">

	<td>

<h1 class="h3 d-flex justify-content-end">El total es de : ${{ subTotal() }}</h1>
	</td>
	</div>
</tr>
	<button @click="clearCart" class="btn btn-secondary mx-5 my-5">Borrar productos de mi carrito</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cart: [],
    };
  },
  mounted() {
    // Cargar el carrito desde localStorage cuando el componente está montado
    this.loadCart();
  },
  methods: {


    loadCart() {
      // Obtener el carrito desde localStorage
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      this.cart = cart;
    },

	clearShowCart(sc){
 this.cart.splice(sc, 1);
      localStorage.setItem('cart', JSON.stringify(this.cart));

	},
	clearCart(){
	localStorage.removeItem('cart');
      this.cart = [];

	},
	// QUEDE AQUI EN EL SUBTOTAL MIRAR QUE MAS SE LE METE PAAAAA
	subTotal(){

// return "el carro esta vacio"
 if (this.cart.length === 0) {
    return 0; // Si el carrito está vacío, retorna 0 como subtotal
  }
 return this.cart.reduce((total, product) => {
	 return total + product.price * product.quantity;
      }, 0);
	},
  },
};
</script>

<style scoped>
/* Puedes agregar estilos específicos del componente aquí */
</style>
