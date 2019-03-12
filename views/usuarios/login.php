<?php helpers::compruebaSesion();
helpers::borrarSesion('error');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="<?=base_url?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=base_url?>favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css">
</head>

<body class="Azul">
<div class="container">
    <div class="row">
        <div class="ContenedorInputsLogin col-6 offset-3 text-center">
            <h1 class="mb-3">LOGIN</h1>
            <div class="errores" id="errores">
            </div>
            <form class="text-center" id="login" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="user" class="form-control text-center" placeholder="Escribe tu usuario" id="user">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <input id="pass" type="password" name="password" class="form-control text-center" placeholder="Escribe tu contraseña">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" id="iniciar" class="btn btn-azul">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

$controller = new usuariosController();
$controller->login();
?>
<script src="<?=base_url?>assets/js/app.js"></script>

</body>

</html>