 // Función para alternar la visibilidad de los anexos
 function toggleAnexos(documentoId) {
    const anexos = document.getElementById('anexos-' + documentoId);
    const arrow = anexos.previousElementSibling.querySelector('.arrow');

    if (anexos.style.display === 'none' || anexos.style.display === '') {
        anexos.style.display = 'table-row';
        arrow.innerHTML = '&#9650;';
    } else {
        anexos.style.display = 'none';
        arrow.innerHTML = '&#9660;';
    }
}

// Función para buscar en tiempo real
document.getElementById("search").addEventListener("input", function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll(".document-row");

    rows.forEach(function(row) {
        const documentName = row.querySelector(".documento-principal").textContent.toLowerCase();
        row.style.display = documentName.includes(searchTerm) ? "" : "none";
    });
});

// Modal de subida de documentos
const modal = document.getElementById("uploadModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");

openModalBtn.onclick = function() {
    modal.style.display = "block";
}

closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

document.getElementById("search").addEventListener("input", function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll(".document-row, .anexo-row"); // Incluir filas de anexos

    rows.forEach(function(row) {
        const documentName = row.querySelector(".documento-principal") ? row.querySelector(".documento-principal").textContent.toLowerCase() : '';
        const anexoName = row.querySelector(".anexo-nombre") ? row.querySelector(".anexo-nombre").textContent.toLowerCase() : '';

        // Mostrar si el nombre del documento o el anexo contiene el término de búsqueda
        if (documentName.includes(searchTerm) || anexoName.includes(searchTerm)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});

function deleteAnexo(anexoId) {
    if (confirm('¿Estás seguro de eliminar este anexo?')) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "delete_anexo.php?id=" + anexoId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Ocultar el anexo eliminado
                var anexoElement = document.querySelector(`.anexo[data-id='${anexoId}']`);
                if (anexoElement) {
                    anexoElement.style.display = 'none';
                }
            }
        };
        xhr.send();
    }
}