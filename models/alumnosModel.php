<?php
class alumnosModel {
    private $nombre, $apellido, $fechaNacimiento, $genero, $edad, $religion, $fechaIngreso;
    private $colegiatura, $adicionales;
    private $db;
    public function __construct()
    {
        $this->db = database::conexion();
    }

    public function getAll($full = false) {
        if($full) {
            $sql = "SELECT a.*, g.nivel, g.grupo,g.grado, t.* FROM alumnos a".
                    " INNER JOIN grupos_alumnos ga ON a.id = ga.id_alumno".
                    " INNER JOIN grupos g ON g.id = ga.id_grupo".
                    " INNER JOIN tutores_alumnos ta on a.id = ta.id_alumno".
                    " INNER JOIN tutores t on ta.id_tutor = t.id";
        } else {
            $sql = "SELECT  a.id,a.nombre,a.apellido, g.nivel, g.grupo,g.grado FROM alumnos a".
                    " INNER JOIN grupos_alumnos ga ON a.id = ga.id_alumno".
                    " INNER JOIN grupos g ON g.id = ga.id_grupo".
                    " ORDER BY id DESC";
        }
        $query = $this->db->query($sql);
        $result = false;
        if($query) {
            $result = $query;
            return $result;
        }
        return $result;
    }


}