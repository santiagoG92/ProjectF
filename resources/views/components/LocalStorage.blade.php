<script>
    function addLocal() {
         const productId = document.querySelector('input[name="id"]').value;
        const productFile = "{{ $product->file->route }}";
        const productName = "{{ $product->name }}";
        const productPrice = parseFloat("{{ $product->price }}");


		const cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existingProduct = cart.find(item => item.id === productId);

        if (existingProduct) {
            existingProduct.quantity += 1;
            // existingProduct.price += productPrice;
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1,
                file: productFile,
            });
        }

        localStorage.setItem('cart', JSON.stringify(cart));


        return Swal.fire({
            icon: 'success',
            title: 'Felicidades!',
            text: 'Productoo Agregado al carrito correctamente .'
        })




    }
</script>
