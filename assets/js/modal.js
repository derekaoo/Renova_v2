var btnAbrirModal2 = document.getElementById("btnAbrirModal2");
var btnRegresarModal1 = document.getElementById("btnRegresarModal1");
var btnCerrarModal2 = document.getElementById("btnCerrarModal2");
var ventanaModal = document.getElementById("ventanaModal");
var ventanaModal2 = document.getElementById("ventanaModal2");

btnAbrirModal2.addEventListener("click", function() {
    ventanaModal.style.display = "none"; //Cerrar primera ventana modal
    ventanaModal2.style.display = "block"; // Abrir segunda ventana modal
});

btnRegresarModal1.addEventListener("click", function() {
    ventanaModal2.style.display = "none"; // Cerrar segunda ventana modal
    ventanaModal.style.display = "block"; // Abrir primera ventana modal
});

btnCerrarModal2.addEventListener("click", function() {
    ventanaModal.style.display = "none"; //Cerrar primera ventana modal
    ventanaModal2.style.display = "none"; // Abrir segunda ventana modal
});