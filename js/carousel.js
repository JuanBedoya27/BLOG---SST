// Array de imágenes de fondo
const imagenes = [
    "../../GESTION DOCUMENTOS/img/fondo.jpg",
    "../../GESTION DOCUMENTOS/img/fondo2.jpg",
    "../../GESTION DOCUMENTOS/img/fondo3.jpg"
];

let indice = 0;

// Función para cambiar el fondo
function cambiarFondo() {
    document.body.style.backgroundImage = `url('${imagenes[indice]}')`;
    indice = (indice + 1) % imagenes.length; // Ciclo infinito
}

// Cambia el fondo cada 4 segundos
setInterval(cambiarFondo, 3000);

// Establece el primer fondo al cargar la página
cambiarFondo();