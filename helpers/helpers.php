<?php

class helpers
{
    public static function borrarSesion($sesion)
    {
        if(isset($_SESSION[$sesion])) {
            $_SESSION[$sesion] = null;
            unset($_SESSION[$sesion]);
        }
    }

    public static function compruebaSesion() {
        if(!isset($_SESSION)) {
            session_start();
        }
    }
}