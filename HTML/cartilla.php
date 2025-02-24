<?php
include '../HTML/nav.html'; 


session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartilla de Seguridad Vial</title>
    <link rel="icon" href="/Escudo_de_El_Carmen_de_Viboral.png" type="image/png">
    <link rel="stylesheet" href="../../GESTION DOCUMENTOS/CSS/cartilla.css"> <!-- Vinculamos el CSS -->
</head>

<body>
    <div id="contenido-principal" class="cartilla">
        <h1>Seguridad Vial</h1>

        <!-- Botones de selección de secciones -->
        <div class="menu">
            <button onclick="mostrarSeccion('motociclistas')">Motociclistas 🏍️</button>
            <button onclick="mostrarSeccion('biciclistas')">Biciclistas 🚲</button>
            <button onclick="mostrarSeccion('automovilistas')">Automovilistas 🚗</button>
            <button onclick="mostrarSeccion('peatones')">Peatones 🚶</button>
            <button onclick="mostrarSeccion('uso-celular')">Riesgos del Uso del Celular 📱</button>
            <button onclick="mostrarSeccion('pasajeros')">Consejos para el pasajero 🚌</button>
            <button onclick="mostrarSeccion('señales-reglamentarias')">Señales Reglamentarias 🚦</button>
            <button onclick="mostrarSeccion('señales-preventivas')" >Señales Preventivas 🚦 </button>
            <button onclick="mostrarSeccion('señales-informativas')">Señales Informativas 🚦</button>
        </div>

        <!-- Sección para motociclistas -->
        <div id="motociclistas" class="seccion">
            <h1> 🏍️ Seguridad Vial para Motociclistas </h1>
            <p>✔️ Conducir una motocicleta requiere especial atención y responsabilidad. Aquí te damos algunas claves para un manejo seguro.</p>

            <ul>
                <li>🪖 <b>Casco de seguridad:</b> Protege de golpes en caso de accidente y reduce el riesgo de lesiones graves en la cabeza.</li>
                <li>🦺 <b>Chaleco y chaqueta reflectiva:</b> Aumenta la visibilidad en la vía, especialmente de noche o en condiciones de poca luz.</li>
                <li>🧤 <b>Guantes y ropa adecuada:</b> Protegen las manos y el cuerpo contra raspones y condiciones climáticas adversas.</li>
            </ul>

            <h2> 🧑‍🤝‍🧑 Comportamiento del Acompañante</h2>
            <p>El pasajero también juega un papel importante en la seguridad del viaje. Sigue estas recomendaciones:</p>
            <ul>
                <li>🪖 <b>Usa siempre el casco y el chaleco reflectivo:</b> No solo es obligatorio, sino que te protege en caso de accidente.</li>
                <li>🏍️ <b>Sube solo cuando la moto esté encendida y en equilibrio:</b> Evita movimientos bruscos al abordar.</li>
                <li>🛑 <b>Siéntate sin empujar al conductor:</b> Mantén una postura estable y sin afectar su maniobrabilidad.</li>
                <li>✋ <b>Sujétate firmemente:</b> Usa las asas de la moto o agárrate del conductor sin restringir sus movimientos.</li>
                <li>🔥 <b>Evita tocar partes calientes como el exosto:</b> Puede causar quemaduras graves.</li>
            </ul>

            <h2> 🛵 El Motociclista Responsable</h2>
            <p>Ser prudente y cumplir las normas puede salvar vidas. Un motociclista responsable:</p>
            <ul>
                <li>🚦 <b>Respeta las señales de tránsito:</b> No excede los límites de velocidad ni cruza semáforos en rojo.</li>
                <li>🔄 <b>Usa las direccionales al girar o adelantar:</b> Informa a los demás conductores sobre sus movimientos.</li>
                <li>📜 <b>Porta siempre los documentos en regla:</b> Licencia de conducción, SOAT y revisión técnico-mecánica al día.</li>
                <li>🛑 <b>Mantiene distancia segura:</b> Al adelantar a otros vehículos, evita puntos ciegos y calcula bien la maniobra.</li>
            </ul>

            <h2>❌ Errores que un Motociclista Debe Evitar</h2>
            <ul>
                <li>⛔ <b>Conducir bajo efectos del alcohol o drogas:</b> Reduce los reflejos y aumenta el riesgo de accidentes. 🍺❌</li>
                <li>⛔ <b>Manejar con una sola mano:</b> Pierdes el control y estabilidad de la moto. ✋❌</li>
                <li>⛔ <b>Hacer maniobras bruscas entre vehículos:</b> Puede causar colisiones graves. ⚡🏍️❌</li>
                <li>⛔ <b>Distraerse con el celular mientras conduce:</b> Un segundo de distracción puede costar una vida. 📱❌</li>
                <li>⛔ <b>Quitar el silenciador para hacer más ruido:</b> Molesta a los demás y es una infracción. 📢❌</li>
                <li>⛔ <b>Circular en contravía o invadir otros carriles:</b> Pone en peligro tu vida y la de otros conductores. 🚗❌</li>
            </ul>

            <div class="mensaje-importante">
                <h2>💡 ¡Prender las luces en el día y la noche es iluminar el camino de tu vida! 💡</h2>
            </div>
        </div>

        <!-- Sección para bicicletas -->
        <div id="biciclistas" class="seccion">
            <h1> 🚲 Seguridad Vial para Biciclistas </h1>
            <h3>🛡️ Equipo de Protección Obligatorio</h3>
            <ul>
                <li>🪖 <b>Casco:</b> Protege la cabeza en caso de caída.</li>
                <li>💡 <b>Luces y reflectores:</b> Aumentan la visibilidad, especialmente de noche.</li>
                <li>🧤 <b>Guantes y rodilleras:</b> Reducen el impacto de posibles caídas.</li>
            </ul>

            <h3>🚦 Reglas Básicas de Tránsito</h3>
            <ul>
                <li>🛣️ <b>Respeta las señales de tránsito:</b> Es fundamental para tu seguridad y la de los demás.</li>
                <li>🚲 <b>Usa siempre las rutas para bicicletas:</b> Evita circular por las vías rápidas y asegúrate de usar carriles adecuados.</li>
                <li>👉 <b>Indica tus movimientos:</b> Usa señales con las manos para indicar giros o paradas.</li>
            </ul>

            <h3>⚠️ Precauciones Adicionales</h3>
            <ul>
                <li>🌞 <b>Ciclismo de día:</b> Usa ropa visible y si es posible, colores fluorescentes.</li>
                <li>🌙 <b>Ciclismo de noche:</b> Usa luces delanteras y traseras, y usa ropa reflectiva para ser más visible.</li>
                <li>🌧️ <b>Clima adverso:</b> En días de lluvia, ten especial cuidado con el pavimento resbaladizo y las condiciones de visibilidad.</li>
            </ul>

            <h3>❌ Errores Comunes a Evitar</h3>
            <ul>
                <li>⛔ <b>No respetar las señales:</b> Puede poner en peligro tanto a los ciclistas como a los conductores.</li>
                <li>⛔ <b>Circulación sin luces:</b> En la noche, las luces son esenciales para tu visibilidad.</li>
                <li>⛔ <b>Falta de casco:</b> Un accidente puede ocurrir en cualquier momento, y un casco puede salvarte la vida.</li>
            </ul>

            <div class="mensaje-importante">
                <h2>💡 ¡Maneja con un actitud mental positiva! 💡</h2>
            </div>
        </div>

        <!-- Sección para automovilistas -->
        <div id="automovilistas" class="seccion" style="display:none;">
            <h1>🚗 Seguridad Vial para Automovilistas</h1>

            <h3>🛡️ Equipo de Protección Obligatorio</h3>
            <ul>
                <li>✔️ <b>Cinturón de seguridad:</b> 🛑 Reduce el riesgo de lesiones en caso de accidente.</li>
                <li>✔️ <b>Airbags:</b> 💥 Ayudan a proteger la cabeza y el torso durante un choque.</li>
                <li>✔️ <b>Luces y señales:</b> 💡 Aseguran que otros conductores te vean.</li>
            </ul>

            <h3>🚦 Reglas Básicas de Tránsito</h3>
            <ul>
                <li>🛣️ <b>Velocidad permitida:</b> ⏱️ Siempre respeta los límites de velocidad.</li>
                <li>🚙 <b>Distancia de seguridad:</b> 🛑 Mantén una distancia prudente con otros vehículos.</li>
                <li>🚦 <b>Semáforo:</b> 🟥 Respeta las luces del semáforo para evitar accidentes.</li>
            </ul>

            <h3>⚠️ Precauciones Adicionales</h3>
            <ul>
                <li>🌧️ <b>Condiciones climáticas adversas:</b> 🌨️ En lluvia o niebla, reduce la velocidad y aumenta la distancia con otros vehículos.</li>
                <li>📱 <b>Evita distracciones:</b> 🚫 No uses el celular mientras conduces.</li>
            </ul>

            <h3>❌ Errores Comunes a Evitar</h3>
            <ul>
                <li>⛔ <b>Exceso de velocidad:</b> ⚠️ Conducir a alta velocidad es peligroso y puede ser fatal.</li>
                <li>⛔ <b>No usar el cinturón de seguridad:</b> ⚠️ El cinturón de seguridad salva vidas.</li>
                <li>⛔ <b>Conducir bajo los efectos del alcohol:</b> 🍷 Beber y conducir no combinan, reduce tu capacidad de reacción.</li>
            </ul>

            <div class="mensaje-importante">
                <h2>💡 ¡Conduce con responsabilidad y siempre usa tu cinturón de seguridad! 💡</h2>
            </div>
        </div>

        

        <!-- Sección para peatones -->
        <div id="peatones" class="seccion" style="display:none;">
            <h1>🚶‍♂️ Seguridad Vial para Peatones</h1>
            <h3>⚠️ Normas de Seguridad</h3>
            <ul>
                <li>✔️ <b>Cruza por los pasos de cebra o esquinas señalizadas:</b> Siempre elige el lugar adecuado para cruzar, es más seguro.</li>
                <li>✔️ <b>Mantén la atención al cruzar la calle:</b> No uses el celular ni otros dispositivos que distraigan tu atención.</li>
                <li>✔️ <b>Observa las señales de tránsito:</b> Detente si es necesario y sigue las indicaciones de los semáforos y señales.</li>
            </ul>

            <h3>⚠️ Precauciones Adicionales</h3>
            <ul>
                <li>🌞 <b>Camina en lugares bien iluminados:</b> Especialmente de noche, para ser más visible a los conductores.</li>
                <li>🌧️ <b>Ten cuidado en días lluviosos:</b> El pavimento puede estar resbaladizo, por lo que debes caminar con precaución.</li>
            </ul>

            <h3>❌ Errores Comunes a Evitar</h3>
            <ul>
                <li>⛔ <b>Cruzar la calle sin mirar:</b> Siempre mira a ambos lados antes de cruzar, incluso si el semáforo está a tu favor.</li>
                <li>⛔ <b>Caminar por carreteras sin acera:</b> Si no hay acera, camina con precaución en el borde de la vía.</li>
            </ul>

            <div class="mensaje-importante">
                <h2>💡 La acera es la vía del peatón, Si por alguna razón debes bajar la calle, actúa con precaución 💡</h2>
            </div>
        </div>

        <!-- Sección para uso de celular -->
        <div id="uso-celular" class="seccion" style="display:none;">
            <h1>📱 Riesgos del Uso del Celular al Conducir</h1>
            <h3>⚠️ Distracción al Conducir</h3>
            <ul>
                <li>✔️ <b>A 60 km/h un vehículo recorre 16 metros por segundo:</b> Si usas el teléfono durante 1 minuto, recorrerás <b>1 kilómetro</b> sin prestar atención al camino.</li>
                <li>❌ <b>Accidentes de tránsito:</b> Cada año mueren más de <b>6.000 colombianos</b> en accidentes de tránsito, de los cuales <b>1.500</b> son causados por el uso del celular.</li>
                <li>⚠️ <b>Mayor riesgo:</b> Usar el celular mientras conduces aumenta <b>4 veces</b> la probabilidad de sufrir un accidente.</li>
                <li>❌ <b>Mensajes de texto:</b> Chatear, escribir o leer mensajes mientras conduces aumenta <b>23 veces</b> la posibilidad de sufrir un accidente.</li>
                <li>⌛ <b>Tiempo promedio de uso:</b> Un conductor usa el celular en promedio <b>50 minutos al mes</b> mientras conduce, lo que equivale a más de <b>1 kilómetro</b> de conducción sin observar el camino.</li>
                <li>⚖️ <b>Multa:</b> Usar el celular mientras se conduce es una infracción del Código Nacional de Tránsito y puede generar una multa de <b>$368.885 pesos</b>.</li>
                <li>💡 <b>Usa el celular solo cuando sea seguro:</b> Si necesitas usarlo, detén el vehículo en un lugar seguro.</li>
            </ul>

            <div class="mensaje-importante">
                <h2> 💡 ¿Conducir y usar el celular?, un grave riesgo que debes evitar 💡 </h2>
            </div>

        </div>

        <div id="pasajeros" class="seccion" style="display:none;">
            <h1>Consejos para el pasajero 🚌</h1>
            <h3> 🚌 Consejos </h3>
            <ul>
                <li>🚏 Si tomas un vehiculo de servicio público, taxi, colectivo o bus, hazlo siempre en los sitios autorizados o bahias de estacionamiento.</li>
                <li>⚠️ Nunca abordes o desciendas de un vehiculo en movimiento, porque es peligroso</li>
                <li>🚶‍♂️ Si vas a subirte a un vehiculo, procura que este se encuentre cerca del andén y nunca vayas corriendo hacia la calle para abordarlo.</li>
                <li>🔒 Cuando estés dentro del vehículo, cerciórate de que las puertas queden bien cerradas.</li>
                <li> 🔗 Ponte el cinturon de seguridad.</li>
            </ul>
            <h3> 🚗 Otros consejos para un viaje seguro </h3>
            <ul>
                <li>🚗 Si el conductor excede los límites de velocidad, pídele que, por la seguridad de los pasajeros y respeto por la vida, vaya más despacio; hazlo con cultura</li>
                <li>🙅‍♂️ No distraigas al conductor, ya que muchos accidentes ocurren por esta causa; debes ser respetuoso con los demás pasajeros</li>
                <li>🚫 Evita sacar las manos, la cabeza o partes del cuerpo fuera del vehículo, porque otros vehículos, objetos o árboles podrían golpearte, ocasionándote graves heridas</li>
                <li>🚨 Cuando llegues a tu destino y te quieras bajar, espera que el vehículo detenga su marcha completamente; el conductor está en la obligación de dejarte en un sitio seguro; nunca permitas que lo haga en la mitad de la calle o lejos del andén</li>
            </ul>

            <div class="mensaje-importante">
                <h2>💡 ¡Viajar con responsabilidad garantiza un viaje seguro para todos! 💡</h2>
            </div>
        </div>

        <div id="señales-reglamentarias" class="seccion" style="display: none;">
            <h1>Señales Reglamentarias</h1>
            <div id="señales-reglamentarias" class="section" style="display: block;"> <img src="../img/image.png" alt="Señal Reglamentaria"> </div>
        </div>

        <div id="señales-preventivas" class="seccion" style="display: none;">
            <h1>Señales Preventivas</h1>
            <div id="señales-preventivas" class="section" style="display: block;"> <img src="../img/Señales Preventivas.png" alt="Señal preventiva"> </div>
        </div>

        <div id="señales-informativas" class="seccion" style="display: none;">
            <h1>Señales Informativas</h1>
            <div id="señales-informativas" class="section" style="display: block;"> <img src="../img/Señales Informativas.jpg" alt="Señal informativa"> </div>
        </div>

    </div>

    <script>
        function mostrarSeccion(seccion) {
            const secciones = document.querySelectorAll('.seccion');
            secciones.forEach(s => s.style.display = 'none');
            document.getElementById(seccion).style.display = 'block';
        }
        
    </script>
    
</body>

</html>