function pregunta2(){

}
function pregunta3(abrir) {
    titulo.innerHTML = `Pregunta 3 Insertar por Fetch`
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function insertar() {
    var formulario = document.getElementById("form-libro");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "insertar.php", false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("mensaje").innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}    
function cargar(url) {
    titulo.innerHTML = `Listar`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function ordenar(campo) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "listar.php?orden=" + campo, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.send();

}
/*function insertar() {
    
    var contenedor;
    contenedor = document.getElementById('contenido');
    var formulario = document.getElementById("form-libro");
    var parametros = new FormData(formulario);
    fetch("insertar.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}*/
function blaneg(){
    titulo.style.backgroundColor = 'black';
    titulo.style.border = '2px solid black';
    titulo.style.color='white';
    mensaje.style.border = '2px solid black';
    mensaje.style.backgroundColor = 'black';
    contenedor.style.border = '4px solid black';
    color.style.border='3px solid black';
    color1.style.border='3px solid black';
    color2.style.border='3px solid black';
    color3.style.border='3px solid black';
    menuhorizontal.style.border = '4px solid black';  
    contenido.innerHTML = "Modo blanco y negro"
}