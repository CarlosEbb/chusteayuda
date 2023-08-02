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


document.addEventListener('DOMContentLoaded', function() {
    const fotoInput = document.getElementById('foto');
    const imagenesSeleccionadasContainer = document.getElementById('imagenesSeleccionadasContainer');

    fotoInput.addEventListener('change', function() {
      imagenesSeleccionadasContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas imágenes

      if (this.files && this.files.length > 0) {
        for (let i = 0; i < this.files.length; i++) {
          const reader = new FileReader();

          reader.onload = function(e) {
            const imagen = document.createElement('img');
            imagen.src = e.target.result;
            imagen.alt = 'Imagen seleccionada';
            imagen.style.width = '100px'; // Ajusta el tamaño de la imagen como desees
            imagen.style.height = '100px'; // Ajusta el tamaño de la imagen como desees

            imagenesSeleccionadasContainer.appendChild(imagen);
          };

          reader.readAsDataURL(this.files[i]);
        }
      }
    });
  });