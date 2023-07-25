//Ejecutando funciones
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", registro);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var container_login_registro = document.querySelector(".container_login-registro");
var box_trasera_login = document.querySelector(".box_trasera-login");
var box_trasera_registro = document.querySelector(".box_trasera-registro");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        box_trasera_registro.style.display = "block";
        box_trasera_login.style.display = "block";
    }else{
        box_trasera_registro.style.display = "block";
        box_trasera_registro.style.opacity = "1";
        box_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        container_login_registro.style.left = "0px";
        formulario_registro.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            container_login_registro.style.left = "10px";
            formulario_registro.style.display = "none";
            box_trasera_registro.style.opacity = "1";
            box_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            container_login_registro.style.left = "0px";
            formulario_registro.style.display = "none";
            box_trasera_registro.style.display = "block";
            box_trasera_login.style.display = "none";
        }
    }

    function registro(){
        if (window.innerWidth > 850){
            formulario_registro.style.display = "block";
            container_login_registro.style.left = "410px";
            formulario_login.style.display = "none";
            box_trasera_registro.style.opacity = "0";
            box_trasera_login.style.opacity = "1";
        }else{
            formulario_registro.style.display = "block";
            container_login_registro.style.left = "0px";
            formulario_login.style.display = "none";
            box_trasera_registro.style.display = "none";
            box_trasera_login.style.display = "block";
            box_trasera_login.style.opacity = "1";
        }
}