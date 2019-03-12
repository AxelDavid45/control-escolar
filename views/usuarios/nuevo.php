<div class="CabeceraApp"> <!---- cabecera de la app --->
    <h1 class="TituloNuevos">Creacion de usuarios</h1>
</div>
<div class="ContenedorNuevos">
    <h3 class="text-center mb-2">Rellena todos los datos</h3>
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
</div>
