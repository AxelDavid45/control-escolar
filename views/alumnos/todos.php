<div class="CabeceraApp"> <!---- cabecera de la app --->
    <a href="" class="btn btn-verde redondeado sombra">Nuevo</a>
    <h1 class="TituloNuevos m-0 p-0">Mostrando: Alumnos</h1>
    <?php require_once "views/layout/buscador.php" ?>
</div> <!--- div que termina la cabecera app -->
<div class="TablasApp">
    <table class="table table-hover">
        <thead class="thead-azul">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel</th>
            <th scope="col">Grado</th>
            <th scope="col">Grupo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        <?php while ($alumno = $alumnos->fetch_object()):  ?>
        <tr>
            <th scope="row"><?=$alumno->id?></th>
            <td><?=$alumno->nombre?> <?=$alumno->apellido?></td>
            <td><?=$alumno->nivel?></td>
            <td><?=$alumno->grado?></td>
            <td><?=$alumno->grupo?></td>
            <td>
                <a href="" class="btn btn-success text-white" role="button" aria-pressed="true">Ver</a>
                <a href="" class="btn btn-warning text-white" role="button" aria-pressed="true">Editar</a>
                <a href="" class="btn btn-danger text-white" role="button" aria-pressed="true">Eliminar</a>
            </td>
        </tr>
        <?php endwhile;  ?>
        </tbody>
    </table>
</div>
