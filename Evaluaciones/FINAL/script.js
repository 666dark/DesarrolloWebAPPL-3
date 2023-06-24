function login(){
    var form = document.getElementById("login_form");
    var datos = new FormData(form);
    var ajax = new XMLHttpRequest()
    ajax.open("POST", 'autenticar.php', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
        }
    }
    ajax.send(datos);
}
function pregunta2(url) {
    contenedor=document.getElementById('contenedor');
    var ajax = new XMLHttpRequest();
    ajax.open("get","contador.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function pregunta3() {
    var contenedor;
    contenedor = document.getElementById('contenedor');
    fetch('read.php')
      .then(response => response.text())
      .then(data => contenedor.innerHTML = data);
  }
  function form(abrir) {
    var contenedor;
    contenedor = document.getElementById('contenedor');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function insertar() {
    var formulario = document.getElementById("form-producto");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "insertar.php", false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementsByTagName('p').innerHTML = ajax.responseText;
        }
    }
    
    ajax.send(parametros);
}
function pregunta4() {
    var contenedor;
    contenedor = document.getElementById('contenedor');
    fetch('cliente.php')
      .then(response => response.text())
      .then(data => contenedor.innerHTML = data);
  }