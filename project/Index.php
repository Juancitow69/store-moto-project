<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Iniciar Sesión</title>
</head>
<body>
<?php
session_start(); 
$error = '';

if (isset($_POST['iniciar'])) {
    $usuario = trim($_POST['Usuario']);
    $clave = trim($_POST['Clave']);

    if ($usuario !== "" && $clave !== "") {
        include('./Conexion.php'); 

        $consulta = "SELECT * FROM `usuarios` WHERE `Usuario` = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $columna = $resultado->fetch_assoc();

            
            if (password_verify($clave, $columna['Clave'])) {
                $_SESSION['user_id'] = $columna['id'];
                $_SESSION['nombreUsuario'] = $columna['Nombre_Completo']; 

                header("Location: frontend.php"); 
                exit;
            } else {
                $error = "La clave es incorrecta.";
            }
        } else {
            $error = "Usuario no encontrado.";
        }

        $stmt->close();
        $conexion->close();
    } else {
        $error = "Por favor, completa todos los campos.";
    }
}
?>


<form action="Index.php" method="POST">
    <h1>INICIAR SESIÓN</h1>
    <hr>
    <?php if (!empty($error)) : ?>
        <div class="alert aler<t-danger">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <hr>
    <div style="position: relative;">
        <i class="fa-solid fa-user"></i>
        <label for="Usuario">Usuario</label>
        <input type="text" id="Usuario" name="Usuario" placeholder="Nombre de Usuario" required>
    </div>
    <div style="position: relative;">
        <i class="fa-solid fa-unlock"></i>
        <label for="Clave">Clave</label>
        <input type="password" id="Clave" name="Clave" placeholder="Clave" required>
    </div>
    <hr>
    <button type="submit" name="iniciar">Iniciar Sesión</button>
    <a href="CrearCuenta.php">Crear Cuenta</a>
</form>
</body>
</html>
