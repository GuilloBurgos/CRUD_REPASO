

document.addEventListener("DOMContentLoaded", function() {
    function validarInput(input, errorId) {
        const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/;
        const errorMensaje = document.getElementById(errorId);

        input.addEventListener("input", function() {
            if (input.value.trim() === "") {
                input.classList.add("is-invalid");
                errorMensaje.textContent = "\u26A0  Este campo no puede estar vacío.";
            } else if (!regex.test(input.value)) {
                input.classList.add("is-invalid");
                errorMensaje.textContent = "\u26A0  No se permiten números ni caracteres especiales.";
            } else {
                input.classList.remove("is-invalid");
                input.classList.add("is-valid");
                errorMensaje.textContent = "";
            }
        });
    }

    validarInput(document.getElementById("txtnombre"), "nombreError");
    validarInput(document.getElementById("txtapellido"), "apellidoError");

   
    document.querySelector("form").addEventListener("submit", function(event) {
        let nombre = document.getElementById("txtnombre");
        let apellido = document.getElementById("txtapellido");
        let nombreError = document.getElementById("nombreError");
        let apellidoError = document.getElementById("apellidoError");
        let isValid = true;

        if (nombre.value.trim() === "") {
            nombre.classList.add("is-invalid");
            nombreError.textContent = "\u26A0  Este campo es obligatorio.";
            isValid = false;
        }

        if (apellido.value.trim() === "") {
            apellido.classList.add("is-invalid");
            apellidoError.textContent = "\u26A0  Este campo es obligatorio.";
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); 
        }
    });
});
