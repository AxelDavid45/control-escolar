<?php

class helpers
{
    public static function borrarSesion($sesion)
    {
        if(isset($_SESSION[$sesion])) {
            $_SESSION[$sesion] = null;
        }
    }

    public static function compruebaSesion() {
        if(!isset($_SESSION)) {
            session_start();
        }
    }
}