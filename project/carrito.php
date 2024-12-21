<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="style_carrito.css">
</head>
<body>

    <div class="cart-container">
        <h1>Carrito de Compras</h1>

        <table class="cart-items">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cart-body">
                <tr data-price="10.00">
                    <td>Moto H2R Kawasaki <br> <br>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRolBXkZevpYUl8V7AdObBeDR92FxEzsA81wA&s" 
                    alt="Moto Kawasaki H2R supercargada" width="150">
                    </td>
                    <td><input type="number" value="1" class="quantity" min="1" /></td>
                    <td>$10.00</td>
                    <td class="total">$10.00</td>
                    <td><button class="remove">Eliminar</button></td>
                </tr>
                <tr data-price="15.00">
                <td>Moto H2R Kawasaki <br> <br>
                    <img src="https://cdn.shopify.com/s/files/1/0608/7819/2888/files/bmw-2023.jpg?v=1674124793" 
                    alt="BMW M 1000 R 2023" width="150">
                    </td>
                    <td><input type="number" value="2" class="quantity" min="1" /></td>
                    <td>$15.00</td>
                    <td class="total">$30.00</td>
                    <td><button class="remove">Eliminar</button></td>
                </tr>
            </tbody>
        </table>

        <div class="cart-summary">
            <p>Total: <span id="total-price">$0.00</span></p>
            <button class="checkout">Finalizar compra</button>
        </div>
    </div>

    <script src="carrito.js"></script>
</body>
</html>

