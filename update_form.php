<?php
include_once 'crud.php';

$ci = $_POST['ci'];
$row = buscarUsuario($ci);
if ($row > 0) {?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Actualizar</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="css/my_styles.css">
    </head>
    <body class="bg-dark d-flex justify-content-center align-items-center vh-100">
        <div class="p-5 rounded-5 text-secondary shadow bg-custom" style="width: 25rem">
            <div class="d-flex justify-content-center">
                <img src="./assets/add-user.png" width="100" height="100">
            </div>
            <div class="text-center fs-1 fw-bold text-white">Usuario</div>

            <form action="update.php" method="post">
                <div class="input-group mt-4">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/ci.png" width="16", height="16">
                    </div>
                    <input class="form-control bg-light" type="number" placeholder="Carnet de Identidad" name="ci" value="<?php echo $row['ci']; ?>">
                </div>      
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/names.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="text" placeholder="Nombres" name="nombre" required value="<?php echo $row['nombres']; ?>">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/names.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="text" placeholder="Apellidos" name="apellido" required value="<?php echo $row['apellidos']; ?>"> 
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/genero.png" width="16" height="16">
                    </div>
                    <select id="selectSexo" name="sexo" class="form-control btn-light" required>
                        <option value="" selected disabled>Sexo</option>
                        <option value="M" <?php if ($row['sexo'] == 'M') echo 'selected'; ?>>Masculino</option>
                        <option value="F" <?php if ($row['sexo'] == 'F') echo 'selected'; ?>>Femenino</option>
                    </select>
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/edad.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="number" placeholder="Edad" name="edad" required value="<?php echo $row['edad']; ?>">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/email.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="text" placeholder="Correo" name="email" required value="<?php echo $row['correo']; ?>">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/password.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="password" placeholder="Contraseña" name="contrasena" required value="<?php echo $row['contraseña']; ?>">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/phone.png" width="16" height="16">
                    </div>
                    <input class="form-control bg-light" type="number" placeholder="Celular" name="celular" required value="<?php echo $row['celular']; ?>">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/carrera.png" width="16" height="16">
                    </div>
                    <select id="selectCarrera" name="carrera" class="form-control btn-light" required>
                        <option value="" disabled selected>Carrera</option>
                        <option value="Ing. en Ciencias de la Computación" <?php if ($row['carrera'] == "Ing. en Ciencias de la Computación") echo 'selected'; ?>>Ing. en Ciencias de la Computación</option>
                        <option value="Ing. Sistemas" <?php if ($row['carrera'] == "Ing. Sistemas") echo 'selected'; ?>>Ing. Sistemas</option>
                        <option value="Ing. Tec. Información y Seg." <?php if ($row['carrera'] == "Ing. Tec. Información y Seg.") echo 'selected'; ?>>Ing. Tec. Información y Seg.</option>
                        <option value="Ing. Eléctrica" <?php if ($row['carrera'] == "Ing. Eléctrica") echo 'selected'; ?>>Ing. Eléctrica</option>
                        <option value="Ing. Electrónica" <?php if ($row['carrera'] == "Ing. Electrónica") echo 'selected'; ?>>Ing. Electrónica</option>
                        <option value="Ing. Mecánica" <?php if ($row['carrera'] == "Ing. Mecánica") echo 'selected'; ?>>Ing. Mecánica</option>
                        <option value="Ing. Civil" <?php if ($row['carrera'] == "Ing. Civil") echo 'selected'; ?>>Ing. Civil</option>
                        <option value="Ing. Química" <?php if ($row['carrera'] == "Ing. Química") echo 'selected'; ?>>Ing. Química</option>
                        <option value="Ing. Petrolera" <?php if ($row['carrera'] == "Ing. Petrolera") echo 'selected'; ?>>Ing. Petrolera</option>
                        <option value="Ing. Industrial" <?php if ($row['carrera'] == "Ing. Industrial") echo 'selected'; ?>>Ing. Industrial</option>
                    </select>
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-icon-custom">
                        <img src="./assets/carrera.png" width="16" height="16">
                    </div>
                    <select id="selectnivelAcceso" name="nivelAcceso" class="form-control btn-light" required>
                        <option value="" disabled>Nivel de acceso</option>
                        <option value="0" <?php if ($row['nivel'] == 0) echo 'selected'; ?>>Admin</option>
                        <option value="1" <?php if ($row['nivel'] == 1) echo 'selected'; ?>>Usuario</option>
                    </select>
                </div>

                <input type="submit" value="Actualizar" class="btn bg-btn-custom text-white w-100 mt-4 fw-semibold shadow-sm">
                <a href="home.php" class="btn bg-btn-custom text-white w-100 mt-4 fw-semibold shadow-sm">Cancelar</a>
            </form>
        </div>
    </body>
    </html>
<?php } else {
    echo "¡ No se ha encontrado ningún registro !";
}
?>
