<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    // Rock Paper Scissors Game

    // 1. Array con las opciones
    const choices = ["Rock", "Paper", "Scissors"];

    // 2. Selección aleatoria del jugador y la computadora (0–2)
    const playerIndex = Math.floor(Math.random() * 3);
    const computerIndex = Math.floor(Math.random() * 3);

    const playerChoice = choices[playerIndex];
    const computerChoice = choices[computerIndex];

    // 3. Variable para el mensaje de respuesta
    let resultMessage = `Player chose: ${playerChoice}\nComputer chose: ${computerChoice}\n`;

    // 4 y 5. Lógica del juego
    if (playerIndex === computerIndex) {
        resultMessage += "Result: It's a tie 🤝";
    } else if (
        (playerChoice === "Rock" && computerChoice === "Scissors") ||
        (playerChoice === "Paper" && computerChoice === "Rock") ||
        (playerChoice === "Scissors" && computerChoice === "Paper")
    ) {
        resultMessage += "Result: Player wins 🎉";
    } else {
        resultMessage += "Result: Computer wins 💻";
    }

    // 6. Mostrar resultado
    console.log(resultMessage);
</script>

<body>

</body>

</html>