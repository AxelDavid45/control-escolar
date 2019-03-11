<?php
require_once 'autoload.php';
//Comprobamos que nos llegue por parametro un controller
if(isset($_GET['controller'])) {
    $clase = $_GET['controller'].'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['method'])) {
    $clase = 'errorController';
}
//Comprobamos si existe la clase construida anteriormente
if(class_exists($clase)) {
    $controller = new $clase();
    //Vemos si existe el metodo
    if(isset($_GET['method']) && method_exists($controller, $_GET['method'])) {
        $method = $_GET['method'];
        $controller->$method();
    }
}


?>