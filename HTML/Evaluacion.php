<?php
include 'nav.html';
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
    <title>Documentacion</title>
    <link rel="stylesheet" href="../CSS/Evaluacion.css">
    <!-- <link rel="
     stylesheet" href="../CSS/style.css"> -->
    <link rel="icon" href="/Escudo_de_El_Carmen_de_Viboral.png" type="image/png">

</head>

<body>

    <section id="evaluacion">
        <h2>Evaluación Inducción Contratistas</h2>
        <p>En esta sección podrá encontrar una serie de preguntas,
            relacionadas con los conocimientos adquiridos previamente
            acerca de el Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST),
            debes obtener un puntaje igual al 100%</p>
        <form id="evaluationForm">
            <div class="question">
                <p>1. Definición de el Sistema de Gestión de Seguridad y Salud en el Trabajo (SG - SST)</p>
                <label><input type="radio" name="q1" value="a" required> Sistema para gestionar las finanzas de la empresa. </label>
                <label><input type="radio" name="q1" value="b"> Una política de recursos humanos para la contratación de personal.</label>
                <label><input type="radio" name="q1" value="c"> Disciplina que trata de la prevención de las lesiones y enfermedades causadas por las condiciones de trabajo, y de la protección y promoción de la salud de los trabajadores.</label>
                <label><input type="radio" name="q1" value="d"> Sistema para gestionar las finanzas de la empresa. </label>
            </div>

            <div class="question">
                <p>2. Definición de accidente de trabajo.</p>
                <label><input type="radio" name="q2" value="a" required> Un accidente de trabajo es cualquier problema financiero de la empresa.</label>
                <label><input type="radio" name="q2" value="b"> Es accidente de trabajo todo suceso repentino que sobrevenga por causa o conocasión del trabajo, y que produzca en el trabajador una lesión orgánica, una perturbación funcional o psiquiátrica, una invalidez o la muerte.</label>
                <label><input type="radio" name="q2" value="c"> Un accidente de trabajo solo incluye lesiones leves que no afectan la salud.</label>
                <label><input type="radio" name="q2" value="d"> Un accidente de trabajo es cualquier lesión que ocurre fuera del trabajo</label>
            </div>

            <div class="question">
                <p>3. Si presenta un accidente de trabajo ¿Cuándo se debe reportar?</p>
                <label><input type="radio" name="q3" value="a" required> Cuando me acuerde.</label>
                <label><input type="radio" name="q3" value="b"> Días despúes, porque no surgió dolor al instante. </label>
                <label><input type="radio" name="q3" value="c"> Inmediatamente.</label>
                <label><input type="radio" name="q3" value="d"> Al siguiente día.</label>
            </div>

            <div class="question">
               <p>4. ¿Cuál es el primer paso para reportar un accidente de trabajo?</p>
                <label><input type="radio" name="q4" value="a" required> De aviso inmediatamente al supervisor. </label>
                <label><input type="radio" name="q4" value="b"> Ignorar el accidente y continuar trabajando. </label>
                <label><input type="radio" name="q4" value="c"> Esperar hasta el final del día para mencionarlo casualmente. </label>
                <label><input type="radio" name="q4" value="d"> Informar del accidente únicamente a tus compaleros de trabajo.</label>
            </div>

            <div class="question">
                <p>5. Definición de enfermedad laboral</p>
                <label><input type="radio" name="q5" value="a" required> Una enfermedad laboral es cualquier enfermedad común que no tiene relación con el trabajo</label>
                <label><input type="radio" name="q5" value="b"> Una enfermedad laboral solo se refiere a lesiones físicas ocurridas en el lugar de trabajo</label>
                <label><input type="radio" name="q5" value="c"> Una enfermedad laboral es una enfermedad que se adquiere durante las vacaciones del trabajador</label>
                <label><input type="radio" name="q5" value="d"> La contraída como resultado de la exposición a factores de riesgo inherentes a la actividad laboral o del medio en el que el trabajador se ha visto obligado a trabajar</label>
            </div>

            <div class="question">
                <p>6. ¿Qué significa COPASST?</p>
                <label><input type="radio" name="q6" value="a" required> Comité Organizador de Procesos Administrativos y de Seguridad en el trabajo.</label>
                <label><input type="radio" name="q6" value="b"> Comité paritario de seguridad y salud en el trabajo.</label>
                <label><input type="radio" name="q6" value="c"> Consejo de Protección Ambiental y Seguridad en el Trabajo </label>
                <label><input type="radio" name="q6" value="d"> Coordinación de Planificación y Asistencia de Servicios Técnicos</label>
            </div>

            <div class="question">
                <p>7. ¿Qué significa COCOLAB?</p>
                <label><input type="radio" name="q7" value="a" required> Comité de Evaluación de Riesgos Ambientales. </label>
                <label><input type="radio" name="q7" value="b"> Coordinación de Planificación de Emergencias Sanitarias.</label>
                <label><input type="radio" name="q7" value="c"> Comisión de Monitoreo de Equipos de Protección Personal.</label>
                <label><input type="radio" name="q7" value="d"> Comité de convivencia laboral.</label>
            </div>

            <div class="question">
                <p>8. ¿Qué hace el COPASST?</p>
                <label><input type="radio" name="q8" value="a" required> El COPASST organiza los eventos sociales y las celebraciones dentro de la empresa. </label>
                <label><input type="radio" name="q8" value="b"> El COPASST se encarga de la gestión de los recursos financieros de la empresa.</label>
                <label><input type="radio" name="q8" value="c"> El COPASST un organismo de promoción y vigilancia de las normas y reglamentos de seguridad y salud en el trabajo dentro de la Alcaldía, a través de actividades de promoción, información y divulgación. </label>
                <label><input type="radio" name="q8" value="d"> El COPASST supervisa el rendimiento laboral y establece metas de productividad.</label>
            </div>

            <div class="question">
                <p>9. ¿Qué es la brigada de emergencias?</p>
                <label><input type="radio" name="q9" value="a" required> Grupo de voluntarios que solo apagan incendios en las empresas </label>
                <label><input type="radio" name="q9" value="b"> Es un grupo de trabajadores organizados debidamente entrenados y capacitados para actuar antes, durante y despúes de una emergencia</label>
                <label><input type="radio" name="q9" value="c"> Equipo encargado exclusivamente de reparar equipos eléctricos durante emergencias</label>
                <label><input type="radio" name="q9" value="d"> Comité de trabajadores dedicado a organizar fiestas y eventos sociales en la empresa.</label>
            </div>

            <div class="question">
                <p>10. ¿Cuál de estos NO es una responsabilidad del contratista?</p>
                <label><input type="radio" name="q10" value="a" required> Procurar el cuidado integral de su salud </label>
                <label><input type="radio" name="q10" value="b"> Informar a los contratantes la ocurrencia de incidentes, accidentes de trabajo y enfermedades laborales</label>
                <label><input type="radio" name="q10" value="c"> Supervisar el trabajo de otros empleados contratados por la empresa</label>
                <label><input type="radio" name="q10" value="d"> Informar oportunamente a los contrantantes toda novedad derivada del contrato</label>
            </div>

            <button type="submit">Enviar Respuestas</button>
        </form>
        <div id="resultado" class="resultado"></div>
    </section>

    <script src="../js/Evaluacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>