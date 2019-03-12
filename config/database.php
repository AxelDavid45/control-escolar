<?php
//Conexion a la bd
class database {
    public static function conexion() {
        $db = new mysqli('localhost','root','','preescolar');
        $db->query("SET NAMES 'utf8'");
        //Retornamos el objeto mysqli
        return $db;
    }
}