// Función para abrir modales
function abrirModal(modalId, carpetaId = null) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
    if (carpetaId) {
        if (modalId === 'modalCrearSubcarpeta') {
            document.getElementById('idPadreSubcarpeta').value = carpetaId;
        } else if (modalId === 'modalSubirArchivo') {
            document.getElementById('idCarpetaArchivo').value = carpetaId;
        }
    }
}

// Función para cerrar modales
function cerrarModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
}

// Cerrar el modal cuando se haga clic fuera de él
window.onclick = function (event) {
    var modals = document.getElementsByClassName('modal');
    for (var i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
            modals[i].style.display = "none";
        }
    }
}

document.getElementById("manageUsersBtn").addEventListener("click", function () {
    window.location.href = "manage_users.php"; // Reemplaza con la URL de tu interfaz de gestión de usuarios
});

// Funciones para mostrar mensajes de éxito y error
function mostrarMensajeExito(mensaje) {
    var successMessage = document.getElementById('successMessage');
    var successText = document.getElementById('successText');
    successText.textContent = mensaje;
    successMessage.style.display = 'block';
}

function mostrarMensajeError(mensaje) {
    var errorMessage = document.getElementById('errorMessage');
    var errorText = document.getElementById('errorText');
    errorText.textContent = mensaje;
    errorMessage.style.display = 'block';
}

document.getElementById('uploadForm').addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData(this);

    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('responseMessage').innerHTML = data;
        })
        .catch(error => {
            document.getElementById('responseMessage').innerHTML = 'Error: ' + error;
        });
});

// Función para normalizar el texto, eliminando tildes y convirtiendo a minúsculas
// Función para normalizar el texto, eliminando tildes, convirtiendo a minúsculas y eliminando espacios innecesarios
// Función para normalizar el texto, eliminando tildes, convirtiendo a minúsculas y eliminando espacios innecesarios
function normalizarTexto(texto) {
    return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replace(/\s+/g, ' ').trim();
}

function buscar() {
    let input = normalizarTexto(document.getElementById('searchInput').value);
    let items = document.querySelectorAll('details, details summary, ul li, ul li a');
    
    let found = false; // Variable para verificar si hay coincidencias

    items.forEach(function(item) {
        let isMatch = normalizarTexto(item.innerText).includes(input);

        if (isMatch) {
            item.style.display = '';
            found = true; // Si encuentra una coincidencia, actualiza la variable
            
            // Asegurarse de que las carpetas parent también estén visibles
            let parent = item.closest('details');
            while (parent) {
                parent.style.display = '';
                parent.open = true;
                parent = parent.parentElement.closest('details');
            }
        } else {
            item.style.display = 'none';
        }
    });

    // Si no hay entradas de búsqueda, cierra todas las carpetas
    if (!input) {
        document.querySelectorAll('details').forEach(function(details) {
            details.open = false;
        });
    }
}

document.getElementById('searchInput').addEventListener('input', buscar);
