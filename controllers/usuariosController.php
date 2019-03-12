<?php
require 'models/usuariosModel.php';

class usuariosController
{
    //Muestra todos los registros
    public function index()
    {
        require_once "views/usuarios/todos.php";
    }

    public function login()
    {
        //Comprueba que lleguen los datos por post
        if (isset($_POST)) {
            $nombre = isset($_POST['user']) ? $_POST['user'] : false;
            $pass = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $pass) {
                $usuario = new usuariosModel();
                $usuario->setNombre($nombre);
                $usuario->setPassword($pass);
                //Comprueba que esten validos los datos
                $login = $usuario->login();
                if ($login != false) {
                    //Crea la sesion ok para poder entrar
                    $_SESSION['sesion_iniciada'] = 'ok';
                    header("Location:".base_url);
                }
            }
        }
        // header("Location:".base_url);
    }

    //Cierra la sesion del usuario
    public function logout()
    {
        if (isset($_SESSION['sesion_iniciada'])) {
            session_destroy();
            header("Location:".base_url);
        }
    }

    public function registro() {
        require_once "views/usuarios/nuevo.php";
    }
    //Guarda los usurios en la bd
    public function save() {
        if(isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $pass = isset($_POST['password']) ? $_POST['password'] : false;
            $rol = isset($_POST['rol']) ? $_POST['rol'] : false;
        }
    }

}