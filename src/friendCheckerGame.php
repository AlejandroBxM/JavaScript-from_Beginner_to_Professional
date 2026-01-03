<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend Checker Game</title>

    <script>
        // Friend Checker Game

        const name = prompt("Enter a name to check if they are your friend:");

        switch (name?.toLowerCase()) {
            case "juan":
            case "maria":
            case "alex":
            case "carlos":
                alert(`${name} is your friend 🤝`);
                console.log(`${name} is your friend 🤝`);
                break;

            default:
                console.log(`Sorry, I don't know ${name} 😅`);
                alert(`Sorry, I don't know ${name} 😅`);
        }
    </script>
</head>

<body>

</body>

</html>