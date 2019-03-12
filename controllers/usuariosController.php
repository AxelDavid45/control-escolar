<?php
require 'models/usuariosModel.php';

class usuariosController
{
    public function index()
    {
        echo "Hola desde usuarios controller";
    }

    public function login()
    {
        if (isset($_POST)) {
            $nombre = isset($_POST['user']) ? $_POST['user'] : false;
            $pass = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $pass) {
                $usuario = new usuariosModel();
                $usuario->setNombre($nombre);
                $usuario->setPassword($pass);
                $login = $usuario->login();
                if ($login != false) {
                    $_SESSION['sesion_iniciada'] = 'ok';
                }
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['sesion_iniciada'])) {
            session_destroy();
        }
    }
}