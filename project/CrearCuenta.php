<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="singup.css">
    <title>Sing up</title>
</head>
<body>
<?php
$msg = '';
$classname = 'alert-danger';

if (isset($_POST['registrar'])) {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contraseña']);

    if (empty($nombre) || empty($correo) || empty($contraseña)) {
        $msg = "Por favor, completa todos los campos.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $msg = "El correo ingresado no es válido.";
    } else {
        include('./Conexion.php');

        
        $verificarCorreo = "SELECT id FROM usuarios WHERE Usuario = ?";
        $stmt = $conexion->prepare($verificarCorreo);
        $stmt->bind_param('s', $correo);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $msg = "El correo ya está registrado. Por favor, usa otro.";
        } else {
            
            $hashedPassword = password_hash($contraseña, PASSWORD_DEFAULT);

            
            $consulta = "INSERT INTO `usuarios` (`Usuario`, `Clave`, `Nombre_Completo`) VALUES (?, ?, ?)";
            $stmtInsert = $conexion->prepare($consulta);
            $stmtInsert->bind_param('sss', $correo, $hashedPassword, $nombre);

            if ($stmtInsert->execute()) {
                $classname = 'alert-primary';
                $msg = "Usuario registrado exitosamente.";
            } else {
                $msg = "Error al registrar usuario: " . $conexion->error;
            }

            $stmtInsert->close();
        }

        $stmt->close();
        $conexion->close();
    }
}
?>
<form action="CrearCuenta.php" method="POST">
    <h1>Registrate</h1>
    <hr>
    <?php if (!empty($msg)) { ?>
        <div class="alert <?php echo $classname; ?>">
            <?php echo $msg; ?>
        </div>
    <?php } ?>
    <hr>
    <label>Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre" required>

    <label>Correo</label>
    <input type="email" name="correo" placeholder="Correo electrónico" required>

    <label>Contraseña</label>
    <input type="password" name="contraseña" placeholder="Contraseña" required>

    <button type="submit" name="registrar">Registrar</button>

    <a href="Index.php">Iniciar sesión</a>
</form>
</body>

</html>
