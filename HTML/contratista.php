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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inducción</title>
    <link rel="stylesheet" href="../CSS/induccion.css">
    <link rel="icon" href="/Escudo_de_El_Carmen_de_Viboral.png" type="image/png">
</head>

<body>

    <div id="navegacion"></div>

    <section class="indice">
        <h2>Índice</h2>
        <div class="indice-contenido">
            <ul>
                <li><a href="#introduccion">Introducción</a></li>
                <li><a href="#Objetivo">Objetivo</a></li>
                <li><a href="#Sistema">Sistema de gestión en la seguridad y salud en el trabajo SG-SST</a></li>
                <li><a href="#accidente">Accidente de trabajo</a></li>
                <li><a href="#ruta">Ruta de reporte de accidente de trabajo</a></li>
                <li><a href="#enfermedad">Enfermedad laboral </a></li>
                <li><a href="#condicion">Condición insegura y acto inseguro</a></li>
                <li><a href="#peligros_riesgos">Peligros y Riesgos</a></li>
                <li><a href="#brigada">Brigada de emergencias</a></li>
            </ul>
            <ul>
                <li><a href="#politica">Politica de Seguridad y Salud en el trabajo </a></li>
                <li><a href="#objetivos_politica">Objetivos de la politica de Seguridad Vial y Seguridad y Salud en el trabajo</a></li>
                <li><a href="#obligaciones">Obligaciones del contratista</a></li>
                <li><a href="#copasst">Comité paritario de seguridad y salud en el trabajo - COOPASST</a></li>
                <li><a href="#cocolab">Comité de convivencia laboral - COCOLAB</a></li>
                <li><a href="#peligros">Peligros</a></li>
                <li><a href="#medidas">Medidas preventivas</a></li>
                <li><a href="#incapacidad">Incapacidades por AT - EL</a></li>
            </ul>
        </div>
    </section>

    <section id="introduccion" class="seccion-con-imagen">
        <h2>Introducción</h2>
        <div class="contenido-imagen-texto ">
            <img src="../img/introduccion.png" alt="Introducción a SST">
            <p>
                La inducción en Seguridad y Salud en el Trabajo (SST) brinda a los contratistas los conocimientos
                sobre los riesgos laborales, medidas preventivas, uso de equipos de protección personal y procedimientos
                de emergencia. Su objetivo es asegurar que trabajen de manera segura, cumplan con las normativas internas
                y contribuyan a un entorno laboral seguro y saludable.
            </p>
        </div>
    </section>
    <section id="Objetivo" class="seccion-con-imagen">
        <h2>Objetivo</h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/objetivo.png" alt="Objetivo de SST">
            <div class="contenido-texto">
                <h4>Inducción</h4>
                <p>Su objeto es la ambientación inicial al medio que se va a trabajar y se programa para todo el personal nuevo y antiguo. Será ejecutada de forma y obligatoria.</p>
                <h4>Normativa</h4>
                <p> -Decreto 1072 de 2015 - Capitulo 6 SG-SST <br>
                    -Resolución 0312 de 2019 estándares Mínimos de SG-SST <br>
                    -ARTÍCULO 2.2.4.6.11. Capacitación en seguridad y salud en el trabajo - SST
                </p>
            </div>
        </div>
    </section>

    <section id="Sistema" class="seccion-con-imagen">
        <h2>Sistema de gestión de la seguridad y salud en el trabajo SG-SST</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/sistema.png" alt="SG-SST">
            <div class="contenido-texto">
                <p>Es el desarrollo de un proceso lógico y por etapas, basado en la mejora continua. <b>PHVA</b> que incluye la política, la organización, la planificación, la aplicación, la evaluación, la auditoría y las acciones de mejora con el <b>objetivo</b> de anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en el trabajo.</p>
                <h4>Seguridad y salud en el trabajo SST</h4>
                <p>Es la <b>disciplina</b> que trata de la <b>prevención</b> de las lesiones y enfermedades causadas por las condiciones de trabajo, y de la protección y promoción de la salud de los trabajadores. Velar por el bienestar tanto físico, mental y social en todas las ocupaciones.</p>
            </div>
        </div>
    </section>

    <section id="accidente" class="seccion-con-imagen">
        <h2>Accidente de trabajo</h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/accidente.png" alt="Accidente de trabajo">
            <div class="contenido-texto">
                <p> -Ley 1562 de 2012
                    Es accidente de trabajo todo suceso repentino que sobrevenga por causa o con ocasión del trabajo, y que produzca en el trabajador una lesión orgánica, una perturbación funcional o psiquiátrica, una invalidez o la muerte. <br>
                    -Ejecución de órdenes del empleador, o contratante durante la ejecución de una labor bajo su autoridad aun fuera del lugar y horas de trabajo. <br>
                    -Produzca durante el traslado de los trabajadores o contratistas desde su residencia a los lugares de trabajo o viceversa, cuando el transporte lo suministre el empleador <br>
                    -Produzca por la ejecución de actividades recreativas, deportivas o culturales, cuando se actúe por cuenta o en representación del empleador o de la empresa <br>
                    -El ocurrido durante el ejercicio de la función sindical siempre y cuando este se produzca en cumplimiento de dicha función.
                </p>
                <h4>Incidente</h4>
                <p>Es el suceso en el que no hay como resultado una lesión. También se puede denominar como casi-accidente (situación en la que casi ocurre). En algunas ocasiones deja pérdidas materiales. Ejemplo: caída de una lámpara encima de un escritorio mientras la funcionaria no estaba en su puesto de trabajo.</p>
            </div>
        </div>
    </section>

    <section id="ruta" class="seccion-con-imagen">
        <h2>Ruta de reporte de accidente de trabajo</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/ruta.png" alt="Accidente de trabajo">
            <div class="contenido-texto">
                <p> <b>1-</b> De aviso inmediatamente al supervisor <br>
                    <b>2-</b> Igualmente reporte inmediatamente a la Unidad de Talento Humano, Seguridad y Salud en el Trabajo
                    al número 5432000 Ext 108 o al Celular : 3204887708, para que sea legalizado el evento ante la ARL <br>
                    <b>3-</b> Desplazarse al servicio de urgencias del hospital San Juan de Dios de la Alcaldía de El Carmen de Viboral. <br>
                    <b>Nota:</b> Ir acompañado de un familiar o compañero nuna soló(a)
                </p>
            </div>
        </div>
    </section>

    <section id="enfermedad" class="seccion-con-imagen">
        <h2>Enfermedad laboral</h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/enfermo.png" alt="Enfermedad Laboral">
            <div class="contenido-texto">
                <p> <b>Ley 1562 de 2012</b>
                    La contraída como resultado de la exposición a factores de riesgo inherentes
                    a la actividad laboral o del medio en el que el trabajador se ha visto obligado a trabajar <br>
                    Se debe demostrar la relación de causalidad con los factores de riesgo ocupacionales y esta es a largo plazo
                </p>
            </div>
        </div>
    </section>

    <section id="condicion" class="seccion-con-imagen">
        <h2>Condición insegura y acto inseguro</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/condicion_insegura.png" alt="Condición Insegura">
            <div class="contenido-texto">
                <h4>Condición insegura</h4>
                <p>Son aquellas situaciones (circunstancias), que se presentan en el lugar de trabajo y que su principal característica es la presencia de factores de riesgo. Ejemplos: <br>
                    -Escaleras sin barandas <br>
                    -Pisos en mal estado <br>
                    -Humedad en techos y paredes
                </p>
            </div>
        </div>

        <div class="contenido-imagen-texto ">
            <img src="../img/acto_inseguro.png" alt="Acto Inseguro">
            <div class="contenido-texto">
                <h4>Acto inseguro</h4>
                <p>Acción u omisión del trabajador que origina un riesgo contra su seguridad y la de sus compañeros. Ejemplos: <br>
                    -Correr por escaleras <br>
                    -No uso de los E.P.P
                </p>
            </div>
        </div>
    </section>

    <section id="peligros_riesgos" class="seccion-con-imagen">
        <h2>Peligros y Riesgos</h2>

        <div class="contenido-texto">
            <h4>Peligro</h4>
            <p>Fuente, situación o acto con potencial de causar daño en la salud de los trabajadores,
                en los equipos o en las instalaciones. <br>
                <b>Ejemplo:</b> Caja con carga pesada forma incorrecta de levantar el peso
            </p>
        </div>

        <div class="imagen-central">
            <img src="../img/peligro_riesgo.png" alt="Imagen Central" width="300px" height="300px">
        </div>

        <div class="contenido-texto">
            <h4>Riesgo</h4>
            <p>Combinación de la probabilidad de que ocurra una o más exposiciones o eventos peligrosos
                y la severidad del daño que puede ser causada por estos. <br>
                <b>Ejemplo:</b> Dolor lumbar, lesiones en la columna
            </p>

        </div>
    </section>

    <section id="politica" class="seccion-con-imagen">
        <h2>Politica de Seguridad y Salud en el Trabajo </h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/politica.png" alt="Enfermedad Laboral">
            <div class="contenido-texto">
                <p><b>ARTÍCULO 2.2.4.6.5. Y 2.2.4.6.6 DECRETO 1072 DE 2017 CAPITULO 6
                        5.2 POLITICA SEGURIDAD VIAL -ISO 39001 DE 2012 <br>
                    </b>LA ALCALDIA DE EL CARMEN DE VIBORAL, reconociendo la importancia del talento humano
                    en la ejecución de actividades ejecutivas de la Administración Pública,
                    se compromete a ofrecer un lugar de trabajo seguro para los Servidores Públicos
                    (Directivos, profesionales, técnicos, asistenciales, trabajadores oficiales y contratistas)
                    siguiendo los lineamientos dados por las autoridades competentes y la normatividad legal vigente,
                    bajo las siguientes premisas:
                    <br>
                    <b>1.</b> Promover y mantener el bienestar físico, mental y social de los trabajadores, mediante el control de los riesgos, ausentismo y la protección del medio ambiente <br>
                    <b>2.</b> Crear y diseñar mecanismos para mantener nuestra política de Seguridad y Salud en el Trabajo actualizada, publicada y divulgada a todos los niveles de nuestra organización. <br>
                    <b>3.</b> Identificar los peligros, evaluar, valorar los riesgos y establecer los respectivos controles, con el fin de evitar y minimizar los accidentes de trabajo, enfermedades y atención de emergencias. <br>
                    <b>4.</b> Cumplir con la normatividad nacional vigente en materia de riesgos laborales y los demás requisitos aplicables. Para lograrlo, la Administración Municipal destina los recursos necesarios a nivel económico, tecnológico y del talento humano; con el fin de proteger la Seguridad y Salud de todos los trabajadores independientemente de su forma de contratación o vinculación, mediante la mejora continua <br>

                    Todos los Servidores Públicos (Directivos, profesionales, técnicos, asistenciales, trabajadores oficiales y contratistas) tendrán la responsabilidad de cumplir con las normas y procedimientos de seguridad y salud en el trabajo, con el fin de realizar un trabajo seguro; Igualmente serán responsables de notificar oportunamente todas aquellas condiciones que puedan generar consecuencias y contingencias para los empleados y la Administración Municipal.
            </div>
        </div>
    </section>

    <section id="objetivos_politica">
        <h2>Objetivos de la politica en Seguridad y Salud en el Trabajo</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/objetivo_politica.png" alt="Enfermedad Laboral">
            <div class="contenido-texto">
                <p><b>ARTÍCULO 2.2.4.6.5. Y 2.2.4.6.6 DECRETO 1072 DE 2017 CAPITULO 6 <br>
                        LA ALCALDIA DE EL CARMEN DE VIBORAL </b>, en la ejecución de sus actividades ejecutivas de la Administración Pública, da a conocer los objetivos de acuerdo con su política en Seguridad y Salud en el Trabajo: <br>
                    1. Disminuir la accidentalidad y aparición de enfermedades laborales. <br>
                    2. Fortalecer los conocimientos de seguridad y salud en el trabajo, mediante la implementación del Plan anual de Capacitación. <br>
                    3. Implementar eficazmente las medidas de prevención y control de acuerdo a la identificación de peligros, evaluación y valoración de los riesgos <br>
                    4. Realizar las evaluaciones médicas requeridas para el monitoreo de las condiciones de salud de los trabajadores.                    . <br>
                    5. Cumplir la normatividad nacional vigente aplicable en materia de riesgos laborales <br>
                    6. Proteger la seguridad y salud de todos los trabajadores, mediante la mejora continua del SG-SST<br>
                </p>
            </div>
        </div>
    </section>

    <section id="obligaciones">
        <h2>Obligaciones de los contratistas</h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/obligaciones.png" alt="Enfermedad Laboral">
            <div class="contenido-texto">
                <h1>Decreto 1072 de 2015</h1>
                <p> <b>ARTÍCULO 2.2.4.2.2.16. Obligaciones del contratista.</b> El contratista debe cumplir con las normas del Sistema General de Riesgos Laborales, en especial, las siguientes: <br>
                    <b>1.</b> Procurar el cuidado integral de su salud. <br>
                    <b>2.</b> Contar con los elementos de protección personal necesarios para ejecutar la actividad contratada, para lo cual asumirá su costo. <br>
                    <b>3.</b> Informar a los contratantes la ocurrencia de incidentes, accidentes de trabajo y enfermedades laborales. <br>
                    <b>4.</b> Participar en las actividades de Prevención y Promoción organizadas por los contratantes, los Comités Paritarios de Seguridad y Salud en el Trabajo o Vigías Ocupacionales o la Administradora de Riesgos Laborales. <br>
                    <b>5.</b> Cumplir las normas, reglamentos e instrucciones del Sistema de Gestión de la Seguridad y Salud en el Trabajo SG-SST. <br>
                    <b>6.</b> Informar oportunamente a los contratantes toda novedad derivada del contrato <br>
                    <b>7.</b> Las demás disposiciones que en materia reglamenta el decreto 1072 de 2015, el Ministerio de Salud y el Ministerio de trabajo <br>
                    <b>8.</b> Acatar las disposiciones que se establezcan en el Plan de Estratégico de Seguridad Vial adoptado por el
                    Municipio de El Carmen de Viboral, Antioquia,
                    de conformidad con lo dispuesto en el artículo 2.3.2.3.1 decreto 1079 de 2015 y demás normas concordantes. <br> <br>
                    El contratista debe informar al contratante, la Administradora de Riesgos Laborales
                    a la cual se encuentra afiliado, para que este realice la correspondiente novedad
                    en la afiliación del nuevo contrato con el municipio; teniendo en cuenta que el contrato con otra ARL
                    debe estar vigente para la novedad, de lo contrario se afiliará a la de la ARL del Municipio.
                </p>
            </div>
        </div>
    </section>
    <section id="copasst">
        <h2>Comité paritario de seguridad y salud en el trabajo - COPASST</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/copasst.png" alt="Enfermedad LaboFral">
            <div class="contenido-texto">
                <h1>Resolución 2013 de 1986 - Decreto 1072 de 2015</h1>
                <p> Es un organismo de promoción y vigilancia de las normas
                    y reglamentos de seguridad y salud en el trabajo dentro de la Alcaldía, a través de actividades de promoción,
                    información y divulgación. El COPASST debe garantizar que los riesgos de enfermedad y accidentes derivados del
                    trabajo sean reducidos al mínimo posible. <br>

                    <b>-Promueve:</b> La salud en los lugares y ambientes de trabajo. <br>
                    <b>-Visita:</b> Periódicamente los lugares de trabajo. <br>
                    <b>-Vigila:</b> El desarrollo de las actividades de seguridad y salud en el trabajo <br>
                    <b>-Sirve:</b> Como organismo de coordinación entre empleador y los trabajadores <br>
                    <b>-Colabora:</b> Con el análisis de las causas de los accidentes de trabajo <br>
                    <b>-Tramita:</b> Los reclamos de los trabajadores relacionados con Salud ocupacional
                </p>
            </div>
        </div>
    </section>

    <section id="cocolab">
        <h2>Comité de convivencia laboal - COCOLAB</h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/cocolab.png" alt="Enfermedad LaboFral">
            <div class="contenido-texto">
                <h1>Resolución 652 de 2012 - Resolución 1356 de 2012 </h1>
                <h1>Ley 2010 de 2006</h1>
                <p> Es una de las estrategias obligatorias que adoptan las organizaciones para
                    contribuir a la protección de los trabajadores, cuyo objetivo es el de propender
                    por mejorar las condiciones laborales, y salvaguardarlos contra los posibles
                    psicosociales que pueda afectar su salud en las actividades laborales. <br>
                    <b>1- Recibir: </b> Y dar trámite a las quejas presentadas referentes a acoso laboral <br>
                    <b>2- Adelantar: </b> Reuniones para crear un espacio de diálogo entre las partes <br>
                    <b>3- Hacer: </b> Seguimiento a los compromisos adquiridos por las partes <br>
                    <b>4- Verificar: </b> Su cumplimiento
                </p>
            </div>
        </div>
    </section>

    <section id="brigda">
        <h2>Brigada de emergencias</h2>
        <div class="contenido-imagen-texto">
            <img src="../img/brigada.png" alt="Enfermedad LaboFral">
            <div class="contenido-texto">
                <h1>Decreto 1072 de 2015 art 2.2.4.6.25</h1>
                <p> Es un grupo de trabajadores organizados debidamente entrenados y capacitados
                    para actuar antes, durante y después de una emergencia.
                </p>
            </div>
        </div>
    </section>

    <section id="peligros">
        <h2>Peligros</h2>
        <div class="contenido-imagen-texto">
            <div class="contenido-texto">
            </div>
        </div>
        <div class="hidden-images" id="hidden-images">
            <div class="hidden-content" onclick="toggleText('text1')">
                <figure>
                    <img src="../img/Fisico.png" alt="Imagen 1">
                    <figcaption>Físico <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text1" style="display:none;">
                    -Ruido <br>
                    -Iluminación <br>
                    -Vibración <br>
                    -Temperaturas extremas <br>
                    -Presión atmosférica <br>
                    -Radiaciones ionizantes <br>
                    -Radiaciones no ionizantes <br>
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text2')">
                <figure>
                    <img src="../img/quimico.png" alt="Imagen 2">
                    <figcaption>Químico <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text2" style="display:none;">
                    -Polvos orgánicos inorgánicos <br>
                    -Fibras <br>
                    -Líquidos <br>
                    -Gases y vapores <br>
                    -Humos metálicos, no metálicos <br>
                    -Material particulado
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text3')">
                <figure>
                    <img src="../img/biologico.png" alt="Imagen 3">
                    <figcaption>Biológico <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text3" style="display:none;">
                    -Virus <br>
                    -Bacterias <br>
                    -Hongos <br>
                    -Rickettsias <br>
                    -Parásitos <br>
                    -Picaduras <br>
                    -Mordeduras <br>
                    -Fluidos o excrementos <br>
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text4')">
                <figure>
                    <img src="../img/biomecanico.png" alt="Imagen 4">
                    <figcaption>Biomecánicos <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text4" style="display:none;">
                    -Postura <br>
                    -Esfuerzo <br>
                    -Movimiento repetitivo <br>
                    -Manipulación manual de cargas
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text5')">
                <figure>
                    <img src="../img/psicosocial.png" alt="Imagen 5">
                    <figcaption>Psicosocial <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text5" style="display:none;">
                    -Gestión organizacional <br>
                    -Características de la organización <br>
                    del trabajo <br>
                    -Condiciones de la tarea <br>
                    -Interfase persona tarea <br>
                    -Jornada de trabajo
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text6')">
                <figure>
                    <img src="../img/fenomeno natural.png" alt="Imagen 6">
                    <figcaption>Fenómenos Naturales <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text6" style="display:none;">
                    -Sismo <br>
                    -Terremoto <br>
                    -Vendaval <br>
                    -Inundación <br>
                    -Derrumbe <br>
                    -Precipitaciones
                </p>
            </div>
            <div class="hidden-content" onclick="toggleText('text7')">
                <figure>
                    <img src="../img/condiciones.png" alt="Imagen 7">
                    <figcaption>Condiciones Inseguras <span class="arrow">⬇️</span></figcaption>
                </figure>
                <p id="text7" style="display:none;">
                    -Mecánico <br>
                    -Eléctrico <br>
                    -Locativo <br>
                    -Tecnológico <br>
                    -Accidentes de tránsito <br>
                    -Públicos <br>
                    -Trabajo en alturas <br>
                    -Espacios Confinados
                </p>
            </div>
        </div>
    </section>

    <section id="medidas">
        <h2>Medidas preventivas </h2>
        <div class="contenido-imagen-texto alternar">
            <img src="../img/medidas_preventivas.png" alt="Enfermedad LaboFral">
            <div class="contenido-texto">
                <h1>Medidas preventivas </h1>
                <p>
                    <b>Notifique</b> inmediatamente cualquier accidente, acto o condición que ponga en riesgo su seguridad y la de otras personas en el formato. <br>
                    <b>Promover el Autocuidado:</b> te cuido, me cuidas y nos cuidamos. <br>
                    <b>Evalúe y controle</b> los riesgos antes de ejecutar cualquier tarea; evite improvisar. <br>
                    <b>Aplique las pautas</b> de higiene postural y de manipulación de cargas. <br>
                    <b>Realice diariamente</b> pausas activas. <br>
                    <b>Revisa</b> de forma periódica tus hábitos de trabajo para detectar posibles actuaciones que puedan generar riesgos. <br>
                    <b>Mientras se desplaza</b> evite hablar por celular, leer o chatear. Mire siempre dónde camina y mantenga una mano libre para apoyarse si fuese necesario. <br>
                    <b>Utiliza</b> las herramientas y equipos de trabajo adecuados. <br>
                    <b>Usa</b> equipos de protección individual si tu trabajo los requiere. <br>
                    <b>Mantenga</b> su zona de trabajo limpia y organizada. <br>
                    <b>Participa</b> en las actividades de capacitación. <br>
                    <b>Acude</b> a los comités de acuerdo con la necesidad. <br>
                    <b>Participa</b> con tus aportes en las buenas prácticas preventivas. <br>
                    <b>Utiliza</b> los canales que promuevan una comunicación efectiva. <br>
                    <b>En casos de emergencia</b> siga los procedimientos de seguridad y repórtela a los brigadistas. <br>
                    <b>Ninguna labor</b> puede efectuarse bajo los efectos del alcohol o de las drogas.
                </p>
            </div>
        </div>
    </section>


    <section id="incapacidad">
        <h2>Incapacidades por AT - EL</h2>
        <div class="contenido-incapacidad">
            <p class="descripcion-incapacidad">
                Las Administradoras de Riesgos Laborales <b>ARL</b>, son entidades aseguradoras de vida que desarrollan sus actividades con los seguros laborales; es decir, son aseguradoras que cubren riesgos de tipo laboral. <br>
            </p>

            <div class="grid-incapacidad">
                <div class="bloque-incapacidades">
                    <h4 class="titulo-bloque">Incapacidades por Accidente o Enfermedad Laboral se refiere a:</h4>
                    <img class="imagen-incapacidades" src="../img/enfermedad_laboral.png" alt="Incapacidades">
                    <p class="texto-bloque">
                        Aquella que se produce como consecuencia directa de las labores realizadas por el trabajador.
                        Este tipo de incapacidades pueden darse por un accidente ocurrido o enfermedad adquirida en los sitios de trabajo. <br>
                    </p>
                </div>

                <div class="bloque-riesgos">
                    <h4 class="titulo-bloque">Tabla de Clases de Riesgo y Cotización</h4>
                    <img class="imagen-riesgos" src="../img/clase_riesgo.png" alt="Clases de Riesgo">
                    <p class="texto-bloque">
                        <b> Clase I:</b> 0.522 % MÍNIMO <br>
                        <b>Clase II: </b>1.044 % BAJO <br>
                        <b>Clase III:</b> 2.436 % MEDIO <br>
                        <b> Clase IV:</b> 4.350 % ALTO <br>
                        <b>Clase V: </b>6.960 % MÁXIMO <br>
                        100% del salario base de cotización desde el día siguiente al que ocurrió el accidente de trabajo
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="evaluacion-container">
        <a href="../HTML/Evaluacion.php"> <button id="btn-evaluacion"> Ir a Evaluación </button> </a>
    </div>

    <script src="/js/nav.js"></script>

    <script>
        function toggleText(id) {
            var texts = document.querySelectorAll('.hidden-content p');
            texts.forEach(function(text) {
                if (text.id === id) {
                    text.style.display = (text.style.display === 'none' || text.style.display === '') ? 'block' : 'none';
                } else {
                    text.style.display = 'none';
                }
            });

            // Cambiar la flecha de dirección
            var captions = document.querySelectorAll('.hidden-content figcaption .arrow');
            captions.forEach(function(caption) {
                if (caption.parentElement.nextElementSibling.id === id) {
                    caption.innerText = (caption.innerText === '⬇️') ? '⬆️' : '⬇️';
                } else {
                    caption.innerText = '⬇️';
                }
            });
        }

        document.getElementById('main-image').addEventListener('click', function() {
            var hiddenImages = document.getElementById('hidden-images');
            if (hiddenImages.style.display === 'none' || hiddenImages.style.display === '') {
                hiddenImages.style.display = 'flex';
            } else {
                hiddenImages.style.display = 'none';
            }
        });
    </script>

</body>

</html>