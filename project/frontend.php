<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Motos</title>
    <link rel="stylesheet" href="style_frontend.css">
    
    <style>
        .cart-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .cart-button i {
            margin-right: 10px;
        }
    </style>

</head>

<body>

    <header>
        <h1>Tienda de Motos</h1>

        <nav>
            <ul>
                <li><a href="#motos">Motos</a></li>
                <li><a href="#video">video</a></li>
                <li><a href="#reviews">reviews</a></li>
            </ul>
        <button class="cart-button" onclick="window.location.href='carrito.php'">
            <i class="fas fa-shopping-cart"></i> Ver Carrito
        </button>
            
        </nav>
    </header>

<section id="motos">
    <h2>Motos Disponibles</h2>
    <div class="motos-container">
        <div class="moto">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRolBXkZevpYUl8V7AdObBeDR92FxEzsA81wA&s" 
            alt="Moto Kawasaki H2R supercargada" width="250">
            <h3>Moto H2R Kawasaki</h3>
            <br>
            <p>Es una moto de pista supercargada, capaz de alcanzar 400 km/h, con diseño aerodinámico y fibra de carbono.</p>
            <br>
            <button onclick="addToCart('Moto H2R Kawasaki', 15000)">Añadir al carrito</button>
            <button onclick="redirectToPage('h2r.html')">Más detalles</button>
        </div>


        <div class="moto">
            <img src="https://www.cyclenews.com/wp-content/uploads/2022/01/2022-Ducati-Panigale-V4-S-right-side.jpg" 
            alt="Moto Ducati Panigale V4 R" width="250">
            <h3>Moto Ducati Panigale V4 R</h3>
            <br>
            <p>La Ducati Panigale V4 R es una moto deportiva de 221 hp, con diseño aerodinámico y tecnología de MotoGP, capaz de alcanzar 299 km/h.</p>
            <br>
            <button onclick="addToCart('Moto Ducati Panigale V4 R', 35000)">Añadir al carrito</button>
            <button onclick="redirectToPage('ducati.html')">Más detalles</button>
        </div>

        <div class="moto">
            <img src="https://www.demotos.com.co/wp-content/uploads/2024/09/Yamaha-R1-2025-01-2.webp" 
            alt="Moto Yamaha YZF-R1M" width="250">
            <h3>Moto Yamaha YZF-R1M</h3>
            <br>
            <p>La Yamaha YZF-R1M es una moto deportiva de 200 hp, inspirada en MotoGP, con tecnología avanzada y una velocidad máxima de 299 km/h.</p>
            <br>
            <button onclick="addToCart('Moto Yamaha YZF-R1M', 90000)">Añadir al carrito</button>
            <button onclick="redirectToPage('yamaha.html')">Más detalles</button>
        </div>
    </div>  
</section>

<section id="motos">
        <h2>Motos Disponibles</h2>
    <div class="motos-container">
        <div class="moto">
            <img src="https://cdn.shopify.com/s/files/1/0608/7819/2888/files/bmw-2023.jpg?v=1674124793" 
            alt="BMW M 1000 R 2023" width="250">
            <h3>BMW M 1000 R 2023</h3>
            <br>
            <p>La BMW M 1000 R 2023 es una hypernaked de alto rendimiento, equipada con un motor de 4 cilindros en línea de 999 cc y tecnología derivada de competición.</p>
            <br>
            <button onclick="addToCart('BMW', 18400)">Añadir al carrito</button>
            <button onclick="redirectToPage('BMW.html')">Más detalles</button>
        </div>

        <div class="moto">
            <img src="https://cdn.shopify.com/s/files/1/0608/7819/2888/files/Aprilia-Extrema-2023.jpg?v=1674124832" 
            alt="Aprilia RS 660 Extrema 2023" width="250">
            <h3>Aprilia RS 660 Extrema 2023</h3>
            <br>
            <p>La Aprilia RS 660 Extrema 2023 es una deportiva ligera y ágil, con motor bicilíndrico de 659 cc, diseño aerodinámico y tecnología avanzada para alto rendimiento.</p>
            <br>
            <button onclick="addToCart('Aprilia RS 660 Extrema 2023', 20400)">Añadir al carrito</button>
            <button onclick="redirectToPage('Aprilia.html')">Más detalles</button>
        </div>

        <div class="moto">
            <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2022/11/mejores-motos-deportivas-2022-2882767.jpg?tf=640x" 
            alt=" Norton V4 RR – SS. " width="250">
            <h3> Norton V4 RR – SS. </h3>
            <br>
            <p>La Yamaha YZF-R1M es una moto deportiva de 200 hp, inspirada en MotoGP, con tecnología avanzada y una velocidad máxima de 299 km/h.</p>
            <br>
            <button onclick="addToCart('Norton V4 RR – SS', 60040)">Añadir al carrito</button>
            <button onclick="redirectToPage('Norton.html')">Más detalles</button>
        </div>
    </div>  
</section>



    <section id="video">
        <div class="video-container">
            <br>    
            <h2> </h2>
            
                <iframe 
                    width="640" 
                    height="360" 
                    src="https://www.youtube.com/embed/PecRMRi9yNA?si=NF0c9UVhJEyamqW_" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
        </div>
    </section>

<section id="reviews">
<h2>Reseñas</h2>
    <p>Envianos tu reseña para seguir mejorando!! </p> <br> <br>
    <form id="review-form">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="rating">Calificación:</label>
        <select id="rating" name="rating" required>
            <option value="5">5 - Excelente</option>
            <option value="4">4 - Muy bueno</option>
            <option value="3">3 - Bueno</option>
            <option value="2">2 - Regular</option>
            <option value="1">1 - Malo</option>
            
        </select>

        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Enviar Reseña</button>
        </form>
    </section>

    <div id="reviews-list">

    </div>
</section>
    <footer>
        <p>&copy; 2024 Tienda de Motos</p>
    </footer>
    <script src="productos.js"></script>
    <script src="backend.js"></script>
</body>
</html>
