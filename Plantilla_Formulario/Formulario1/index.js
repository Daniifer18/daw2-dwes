const nombre = document.getElementById("nb");
const apellidos = document.getElementById("sn");
const email = document.getElementById("em");
const edad = document.getElementById("age");
const password = document.getElementById("pass");
const parrafo = document.getElementById("warnings");
const form = document.getElementById("form");


form.addEventListener("submit", e=>{
    e.preventDefault();
    let warning = "";
    let correcto = false;
    let vemail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    parrafo.innerHTML = "";
    if(nombre.value.length < 3){
        warning += `El nombre es muy corto<br>`;
        correcto = true;
    }
    if(apellidos.value.length < 10){
        warning += `Los apellidos son muy cortos<br>`;
        correcto = true;
    }
    if(!vemail.test(email.value)){
        warning += `Formato de email incorrecto<br>`;
        correcto = true;
    }
    if(edad.value > 150){
        warning += `El nombre es muy corto<br>`;
        correcto = true;
    }
    if(password.value.length < 8){
        warning += `La contraseña no es valida<br>`;
        correcto = true;
    }
    if(correcto){
        parrafo.innerHTML = warning;
    }else{
        alert("Formulario enviado correctamente");
    }
})