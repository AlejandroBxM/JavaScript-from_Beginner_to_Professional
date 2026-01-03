<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacciArray js</title>
    <script>
        let nr1 = 0;
        let nr2 = 1;
        let temp;
        fibonacciArray = [];
        while (fibonacciArray.length < 25) {
            fibonacciArray.push(nr1);
            temp = nr1 + nr2;
            nr1 = nr2;
            nr2 = temp;
        }
        console.log(fibonacciArray);

        let number;
        do {
            number = prompt("Please enter a number between 0 and 100: ");
        } while (!(number >= 0 && number < 100));
    </script>
</head>

<body>

</body>

</html>