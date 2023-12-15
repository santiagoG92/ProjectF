<template>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>Imagen</th>
          <th>Producto</th>
          <th>Precio Unitario</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(product, sc) in cart" :key="sc">
       <img :src="product.file" alt="Imagen del producto" style="max-width: 85px; max-height: 85px;">
          <td>{{ product.name }}</td>
          <td>${{ product.price }}</td>
          <td>{{ product.quantity }}</td>
		  <td>

			<button @click="clearShowCart(sc)" class="btn btn-danger ">x</button>

		  </td>

        </tr>
      </tbody>
    </table>




<div id="total" class="d-flex justify-content-end">

<h1 v-if="subTotal() > 0" class="h3">El total es de : ${{ subTotal() }}</h1>
</div>

<div class=" d-flex flex-column align-items-center transparent-text">
<button class="btn btn-muted btn-lg " @click="index()"> {{cartNan()}}</button>
</div>


	<button v-if="subTotal() > 0" @click="clearCart" class="btn btn-secondary mx-5 my-5">Borrar productos de mi carrito</button>
  </div>
</template>

<script>
	import { deleteMessage } from '@/helpers/Alerts.js'
export default {
  data() {
    return {
      cart: [],
    };
  },
  mounted() {

    this.loadCart();
  },
  methods: {



    loadCart() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      this.cart = cart;
    },


	clearShowCart(sc){
 this.cart.splice(sc, 1);
      localStorage.setItem('cart', JSON.stringify(this.cart));

	},
	async clearCart() {
       const isConfirmed = await deleteMessage();

       if (isConfirmed) {
        localStorage.removeItem('cart');
        this.cart = [];


        // successMessage('Los produtos del carrito se borraronn');
      }
    },
cartNan(){

	if (this.cart.length === 0) {
		return"El carrito esta vacio Ir a mi inicio"
}
	},
	index() {

      window.location.href = '/';
    },

	// QUEDE AQUI EN EL SUBTOTAL MIRAR QUE MAS SE LE METE PAAAAA
	subTotal(){
 if (!this.cart.length === 0) {

return "El carrito esta vacio"
  }
 return this.cart.reduce((total, product) => {
	 return total + product.price * product.quantity;
      }, 0);
	},
  },
};
</script>

