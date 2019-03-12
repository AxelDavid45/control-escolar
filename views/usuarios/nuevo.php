<div class="CabeceraApp"> <!---- cabecera de la app --->
    <h1 class="TituloNuevos">Creacion de usuarios</h1>
</div>
<div class="ContenedorNuevos">
    <h3 class="text-center mb-2">Rellena todos los datos</h3>
    <?php  if(isset($_SESSION['error']) && $_SESSION['error']): ?>
    <div class="alert alert-danger">
        <p class="text-center m-0">Ocurrio un error, comprueba los datos o intenta de nuevo</p>
    </div>

    <?php  endif; ?>
    <form method="POST" action="<?=base_url?>usuarios/save">
        <div class="row mt-3">
            <div class="col">
                <input type="text" name="nombre" placeholder="Nombre:" class="form-control">
            </div>
            <div class="col">
                <input type="password" name="password" placeholder="Contraseña:" class="form-control">
            </div>
            <div class="col">
                <input type="password" placeholder="Confirma tu contraseña: " class="form-control" id="confirmaPass">
            </div>
            <div class="col">
                <select name="rol" id="rol" class="custom-select">
                    <option value="" selected>Privilegios</option>
                    <option value="1">Administrador</option>
                    <option value="2">Visor</option>
                </select>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success sombra redondeado">Guardar</button>
                </div>
            </div>
    </form>
</div>
<span><strong>*Todos los campos tienen que ser llenados*</strong></span>
</div>
<?php  helpers::borrarSesion('error'); ?>