<?php
function autoload($clase) {
    require "controllers/".$clase.".php";
}
//Metodo que carga todas las clases del controller
spl_autoload_register('autoload');