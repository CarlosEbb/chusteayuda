// Obtener el elemento del checkbox y el input
const checkbox = document.getElementById("tienda");
const inputPrecio = document.getElementById("precio");
const precioInput = document.getElementById("precioInput");

// Agregar un evento para detectar los cambios en el checkbox
checkbox.addEventListener("change", function () {
    
    // Verificar si el checkbox está marcado (checked)
    if (checkbox.checked) {
        // Mostrar el input (removiendo la clase d-none)
        inputPrecio.classList.remove("d-none");
        // Agregar el atributo required al input
        precioInput.setAttribute("required", "");
    } else {
        // Ocultar el input (agregando la clase d-none)
        inputPrecio.classList.add("d-none");
        // Quitar el atributo required al input
        precioInput.removeAttribute("required");
    }
});