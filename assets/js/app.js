const form = document.querySelector('#login');
const usuario = document.querySelector("#user");
const pass = document.querySelector("#pass");
const inicioSesion = document.querySelector('#iniciar');

//Ejecutamos la funcion de listeners
Listeners();

function Listeners() {
    document.addEventListener("DOMContentLoaded",inicioApp);
    usuario.addEventListener('blur',validarCampo);
    pass.addEventListener('blur',validarCampo);
    console.log('doc-listo');
}

function inicioApp() {
    //Desactivamos el btn cuando empieza la app
    inicioSesion.disabled = true;
}

function validarCampo() {
    //Ennviamos el campo que hace el evento
    validarLongitud(this);

    if(usuario.value != '' && pass.value != '') {
        inicioSesion.disabled = false;
        //Agregamos estilos al form para que acepte los small
        form.classList.remove('needs-validation');
    } else {
        form.classList.add('needs-validation');
        inicioSesion.disabled = true;
    }
}

function validarLongitud(campo) {
    //Comprobamos la longitud del campo
    let parent = campo.parentElement;
    if(campo.value.length > 0) {
        campo.style.borderColor = 'green';
        campo.classList.remove('error');
        //ponemmos en blanco el error
        parent.lastChild.innerText = '';
    } else {
        //Removemos el error para que no se este repitiendo
        parent.removeChild(parent.lastChild);
        muestraAyuda(campo);
        campo.style.borderColor = 'red';
        campo.classList.add('error');
    }
    console.log(campo);
}

//Funcion que muestra ayuda de errores
function muestraAyuda(campo) {
    //Obtenemos el campo padre div
    let padre = campo.parentElement;
    //Creamos un small
    let small = document.createElement('small');
    ///Le agregamos las clases de bootstrap
    small.classList.add('form-text');
    small.classList.add('text-muted');
    //Muestra texto dependiendo lo que sea
    if(campo.name == 'user') {
        small.innerText = 'Es necesario escribir el usuario';
    } else if(campo.name == 'password') {
        small.innerText = 'Es necesario escribir una contraseña';
    }
    //Inserta el padre
    padre.appendChild(small);
}