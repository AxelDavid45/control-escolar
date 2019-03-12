<?php
session_start();
require_once 'autoload.php';
require_once 'config/parametros.php';
require_once 'config/database.php';
require_once "helpers/helpers.php";

function showError()
{
    $metodo = new errorController();
    $metodo->index();
}

//Comprobamos que nos llegue por parametro un controller
if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == 'ok') {

    if (isset($_GET['controller'])) {
        $clase = $_GET['controller'].'Controller';
    } elseif (!isset($_GET['controller']) && !isset($_GET['method'])) {
        $clase = controllerDefault;
    } else {
        showError();
        die();
    }
//Comprobamos si existe la clase construida anteriormente
    if (class_exists($clase)) {
        $controller = new $clase();
        //Vemos si existe el metodo
        if (isset($_GET['method']) && method_exists($controller, $_GET['method'])) {

            $method = $_GET['method'];
            $controller->$method();
        } elseif (!isset($_GET['method'])) {
            //Si no existe ningun metodo ejecutamos el que esta por defecto
            $method = method_default;
            $controller->$method();
        } else {
            showError();
        }
    } else {
        showError();
    }

} else {
    require_once "views/usuarios/login.php";
}
?>