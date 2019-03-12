<?php
require_once "models/alumnosModel.php";
class alumnosController
{
    public function index() {
        $todosAlumnos = new alumnosModel();
        $alumnos = $todosAlumnos->getAll(false);
        require_once "views/alumnos/todos.php";
    }
}