document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los botones "Añadir al carrito"
    const addButtons = document.querySelectorAll('.add-to-cart');

    addButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Obtener la información del producto desde los atributos de data
            const product = button.closest('.product');
            const productId = product.getAttribute('data-id');
            const productName = product.getAttribute('data-name');
            const productPrice = parseFloat(product.getAttribute('data-price'));

            // Crear un objeto del producto
            const cartProduct = {
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1
            };

            // Obtener el carrito actual desde localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Verificar si el producto ya está en el carrito
            const existingProduct = cart.find(item => item.id === productId);
            if (existingProduct) {
                // Si ya está, incrementar la cantidad
                existingProduct.quantity += 1;
            } else {
                // Si no está, agregarlo
                cart.push(cartProduct);
            }

            // Guardar el carrito actualizado en localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Confirmación
            alert(`${productName} añadido al carrito.`);
        });
    });
});
