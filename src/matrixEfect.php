<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        body {
            background: black;
            margin: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
 

<script>
 // 1. Create canvas and get 2D context
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // 2. Set width and height and prepend to body
    canvas.width = 5000;
    canvas.height = 400;
    document.body.prepend(canvas);

    // Characters used in the Matrix effect
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*';
    const charArray = chars.split('');

    const fontSize = 10;
    const columns = canvas.width / fontSize;

    // 3. Create colVal array and initialize with 0
    const colVal = [];
    for (let i = 0; i < columns; i++) {
        colVal[i] = 0;
    }

    // 4. Main Matrix function (runs every 50ms)
    function matrix() {

        // 5. Black background with low opacity (fade effect)
        ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // 6. Set font color to green
        ctx.fillStyle = '#0F0';
        ctx.font = fontSize + 'px monospace';

        // 7. Iterate using map over colVal
        colVal.map((y, index) => {
            const text = charArray[Math.floor(Math.random() * charArray.length)];
            const x = index * fontSize;

            ctx.fillText(text, x, y);

            // Reset drop randomly after it reaches bottom
            if (y > canvas.height && Math.random() > 0.975) {
                colVal[index] = 0;
            } else {
                colVal[index] = y + fontSize;
            }
        });
    }

    setInterval(matrix, 50);
</script>
</body>
</html>