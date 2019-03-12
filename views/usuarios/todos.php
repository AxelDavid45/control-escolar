<div class="CabeceraApp"> <!---- cabecera de la app --->
    <a href="<?= base_url ?>usuarios/registro" class="btn btn-verde redondeado sombra">Nuevo</a>
    <h1 class="TituloNuevos m-0 p-0">Todos los usuarios</h1>
    <?php require_once "views/layout/buscador.php" ?>
</div> <!--- div que termina la cabecera app -->
<div class="TablasApp">
    <table class="table table-hover">
        <thead class="thead-azul">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Fecha de creación</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($usuario = $todosUsuarios->fetch_object()): ?>
            <tr>
                <th scope="row"><?= $usuario->id ?></th>
                <td><?= $usuario->nombre ?></td>
                <td><?=($usuario->rol == 1) ? 'Administrador' : 'Visor'?></td>
                <td><?=$usuario->fecha_creacion?></td>
                <td>
                    <a href="" class="btn btn-success text-white" role="button" aria-pressed="true">Ver</a>
                    <a href="" class="btn btn-warning text-white" role="button" aria-pressed="true">Editar</a>
                    <a href="" class="btn btn-danger text-white" role="button" aria-pressed="true">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
