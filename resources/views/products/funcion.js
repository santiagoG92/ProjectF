
// function addLocal() {
// 	// Obtener el producto desde el formulario
// 	const productId = document.querySelector('input[name="id"]').value;
// 	const productFile = "{{ $product->file->route}}";
// 	const productName = "{{ $product->name }}";
// 	const productPrice = parseFloat("{{ $product->price }}"); // Convertir el precio a número
//   // Obtener el carrito de localStorage o crear uno vacío
//     const cart = JSON.parse(localStorage.getItem('cart')) || [];

//     // Verificar si el producto ya está en el carrito
//     const existingProduct = cart.find(item => item.id === productId);

//     if (existingProduct) {
//         // Si el producto ya está en el carrito, incrementar la cantidad y sumar el precio
//         existingProduct.quantity += 1;
//         existingProduct.price += productPrice;
//     } else {
//         // Si el producto no está en el carrito, agregarlo
//         cart.push({
//             id: productId,
//             name: productName,
//             price: productPrice,
//             quantity: 1,
// 			file: productFile,
//         });
//     }

// 	// Actualizar el carrito en localStorage
// 	localStorage.setItem('cart', JSON.stringify(cart));

// 	// Puedes redirigir o mostrar un mensaje de éxito aquí si lo deseas
// 	alert('Producto añadido al carrito local');

// 	// O puedes enviar el formulario si es necesario
// 	document.getElementById('addLocalForm').submit();
// }
