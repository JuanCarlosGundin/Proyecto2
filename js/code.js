function validar() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // alert(email);
    // alert(password);

    if (email == "" || password == "") {

        if (email == "" && password != "") {

            //alert ("No se ha especificado ningun Email");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Email</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('password').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else if (email != "" && password == "") {

            //alert ("No se ha especificado ninguna Contraseña");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ninguna Contraseña</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else {

            //alert ("No se ha especificado ningun valor");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Valor</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('mensaje').style.color = "red";
            return false;
        }
    } else {
        return true;
    }
}

function validarR() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // alert(email);
    // alert(password);

    if (email == "" || password == "") {

        if (email == "" && password != "") {

            //alert ("No se ha especificado ningun Email");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Email</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('password').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else if (email != "" && password == "") {

            //alert ("No se ha especificado ninguna Contraseña");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ninguna Contraseña</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid grey";
            document.getElementById('mensaje').style.color = "red";
            return false;

        } else {

            //alert ("No se ha especificado ningun valor");

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Valor</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password').style.border = "2px solid red";
            document.getElementById('email').style.border = "2px solid red";
            document.getElementById('mensaje').style.color = "red";
            return false;
        }
    } else {
        return true;
    }
}




//
function validarReserva() {
    nombre = document.getElementById('nombre').value
    telefono = document.getElementById('telefono').value
    contenido = document.getElementById('js')

    if (nombre == '' && telefono == '') {
        contenido.innerHTML = 'Introduce el nombre y el telefono'
        return false
    } else if (nombre == '') {
        contenido.innerHTML = 'Introduce el nombre'
        return false
    } else if (telefono == '') {
        contenido.innerHTML = 'Introduce el telefono'
        return false
    } else {
        return true
    }
}

function validarActualizarUser() {
    nombre = document.getElementById('nombre').value
    telefono = document.getElementById('telefono').value
    contenido = document.getElementById('js')

    if (nombre == '' && telefono == '') {
        contenido.innerHTML = 'Introduce el nombre y el correo'
        return false
    } else if (nombre == '') {
        contenido.innerHTML = 'Introduce el nombre'
        return false
    } else if (telefono == '') {
        contenido.innerHTML = 'Introduce el correo'
        return false
    } else {
        return true
    }
}

function validarCrearUser() {
    nombre = document.getElementById('nombre').value
    telefono = document.getElementById('telefono').value
    contra = document.getElementById('contra').value
    contenido = document.getElementById('js')

    if (nombre == '' && telefono == '' && contra == '') {
        contenido.innerHTML = 'Llena todos los campos '
        return false
    } else if (nombre == '') {
        contenido.innerHTML = 'Introduce el nombre'
        return false
    } else if (telefono == '') {
        contenido.innerHTML = 'Introduce el correo'
        return false
    } else if (contra == '') {
        contenido.innerHTML = 'Introduce la contraseña'
        return false
    } else {
        return true
    }
}

function validarActualizarZona() {
    nombre = document.getElementById('nombre').value
    contenido = document.getElementById('js')

    if (nombre == '') {
        contenido.innerHTML = 'Llena todos los campos '
        return false
    }  else {
        return true
    }
}

function validarActualizarMesa() {
    nombre = document.getElementById('nombre').value
    telefono = document.getElementById('telefono').value
    contenido = document.getElementById('js')

    if (nombre == '' && telefono == '') {
        contenido.innerHTML = 'Llena todos los campos '
        return false
    } else if (nombre == '') {
        contenido.innerHTML = 'Introduce el numero'
        return false
    } else if (telefono == '') {
        contenido.innerHTML = 'Introduce las sillas'
        return false
    } else {
        return true
    }
}
