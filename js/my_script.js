// variables globales
var contenido = document.getElementById("contenido");
// funcion para cargar el contenido de una pagina
function cargarContenido(url) {
    //carga el contenido de una pagina en el lugar done estan los datos
    fetch(url)
        .then(response => response.text())
        .then(data => contenido.innerHTML = data);
}