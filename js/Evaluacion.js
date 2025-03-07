document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("evaluationForm");
    const resultadoDiv = document.getElementById("resultado");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita que se envíe el formulario

        let score = 0;
        const totalQuestions = 10; // Total de preguntas

        // Respuestas correctas
        const correctAnswers = {
            q1: "c",
            q2: "b",
            q3: "c",
            q4: "a",
            q5: "d",
            q6: "b",
            q7: "d",
            q8: "c",
            q9: "b",
            q10: "c"
            
        };

        // Verificar que todas las preguntas han sido respondidas
        let allAnswered = true;

        for (let question in correctAnswers) {
            const selectedAnswer = form.elements[question].value;
            if (!selectedAnswer) {
                allAnswered = false;
                break;
            }
        }

        if (!allAnswered) {
            resultadoDiv.innerHTML = `
                <h3>Error</h3>
                <p>Por favor, responde todas las preguntas antes de enviar.</p>
            `;
            return;
        }

        // Verificar respuestas
        for (let question in correctAnswers) {
            const selectedAnswer = form.elements[question].value;
            if (selectedAnswer === correctAnswers[question]) {
                score++;
            }
        }

        // Mostrar resultado
        resultadoDiv.innerHTML = `
            <h3>Resultados de la Evaluación</h3>
            <p>Has respondido correctamente ${score} de ${totalQuestions} preguntas.</p>
            <p>${score === totalQuestions ? "¡Excelente trabajo!" : "Inténtalo nuevamente."}</p>
        `;

        // Si todas las respuestas son correctas, mostrar el botón de navegación
        if (score === totalQuestions) {
            const continueButton = document.createElement("button");
            continueButton.textContent = "Continuar";
            continueButton.onclick = function () {
                window.location.href = "../HTML/certificado.html"; 
            };
            resultadoDiv.appendChild(continueButton);
        }

        // Reiniciar el formulario
        form.reset();
    });
});

