document.addEventListener('DOMContentLoaded', function() {
    // Función para actualizar el total de cada producto
    function updateProductTotal(productRow) {
        const quantityInput = productRow.querySelector('.quantity');
        const price = parseFloat(productRow.getAttribute('data-price'));
        const quantity = parseInt(quantityInput.value);
        const total = price * quantity;
        productRow.querySelector('.total').textContent = `$${total.toFixed(2)}`;
    }

    // Función para actualizar el total general
    function updateTotalPrice() {
        let totalPrice = 0;
        const rows = document.querySelectorAll('.cart-items tbody tr');
        rows.forEach(row => {
            const total = parseFloat(row.querySelector('.total').textContent.replace('$', ''));
            totalPrice += total;
        });
        document.getElementById('total-price').textContent = `$${totalPrice.toFixed(2)}`;
    }

    // Manejar el cambio de cantidad de productos
    const quantityInputs = document.querySelectorAll('.quantity');
    quantityInputs.forEach(input => {
        input.addEventListener('input', function() {
            const productRow = input.closest('tr');
            updateProductTotal(productRow);
            updateTotalPrice();
        });
    });

    // Manejar el clic en el botón de eliminar
    const removeButtons = document.querySelectorAll('.remove');
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productRow = button.closest('tr');
            productRow.remove();
            updateTotalPrice();
        });
    });

    // Actualizar los totales iniciales
    updateTotalPrice();
});
