// Suponiendo que tienes un formulario en tu página con el id "crearSubcarpetaForm"
// y un div con el id "respuesta" para mostrar los mensajes.

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('crearSubcarpetaForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

            const formData = new FormData(form);
            const nombre_subcarpeta = formData.get('nombre_subcarpeta');
            const id_padre = formData.get('id_padre');

            fetch('crear_subcarpeta.php', {
                method: 'POST',
                body: new URLSearchParams({ nombre_subcarpeta, id_padre }),
            })
            .then(response => response.json())
            .then(data => {
                const respuesta = document.getElementById('respuesta');
                if (data.error) {
                    respuesta.innerHTML = '<p style="color: red;">' + data.error + '</p>';
                } else {
                    respuesta.innerHTML = '<p style="color: green;">' + data.success + '</p>';
                }
            })
            .catch(error => {
                const respuesta = document.getElementById('respuesta');
                respuesta.innerHTML = '<p style="color: red;">Ocurrió un error al procesar la solicitud.</p>';
            });
        });
    }
});
