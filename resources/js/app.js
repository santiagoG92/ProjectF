import './bootstrap'
import { createApp } from 'vue'
import vSelect from 'vue-select'

// Components ---------------------------------------------------
import TheProductList from './components/products/TheProductList.vue'
import TheCategoryList from './components/Category/TheCategoryList.vue'
import TheCartList from './components/ShoppingCart/TheCartList.vue'
// import CartModal from './components/ShoppingCart/CartModal.vue'

import BackendError from './components/Components/BackendError.vue'




const app = createApp({
	components: {
		TheProductList,
		TheCategoryList,
		TheCartList,

	}
})

app.component('v-select', vSelect)
app.component('backend-error', BackendError)
app.mount('#app')
