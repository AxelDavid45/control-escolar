<?php

class usuariosModel
{
    private $nombre, $password, $rol, $fecha;
    private $db;

    //La base de datos se guarda aqui
    public function __construct()
    {
        $this->db = database::conexion();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost' => 4]);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function login() {
        //Consulta que comprueba el usuario
        $sql = "SELECT * FROM usuarios WHERE nombre = '{$this->getNombre()}'";
        $query = $this->db->query($sql);
        $result = false;
        if($query && $query->num_rows == 1) {
            $result = $query->fetch_object();
            $verify = password_verify($this->password, $result->password);
            if($verify) {
                return $result;
            }
        }

        return $result;
    }

    //Guarda un usuario en la base de datos
    public function save() {
        $sql = "INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getPassword()}', {$this->getRol()},CURDATE())";
        $query = $this->db->query($sql);
        $result = false;
        if($query) {
            $result = $query;
            return $result;
        }
        return $result;


    }



}