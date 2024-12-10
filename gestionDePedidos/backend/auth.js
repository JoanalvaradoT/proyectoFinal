function verificarAutenticacion() {
    const usuario = localStorage.getItem("usuario");

    if (!usuario) {
        alert("Por favor, inicia sesión.");
        window.location.href = "iniciar_sesion.html";
    } else {
        console.log("Usuario autenticado:", JSON.parse(usuario));
    }
}
