<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <script>
        let someArray = ["Mike", "Antal", "Marc", "Emir", "Louiza", "Jacky"];
        let notFound = true;
        while (notFound && someArray.length > 0) {
            if (someArray[0] === "Louiza") {
                console.log("Found her!");
                console.log("Found her!");
                notFound = false;
            } else {
                someArray.shift();
            }
        }

        let names = ["Chantal", "John", "Maxime", "Bobbi", "Jair"];
        for (let i = 0; i < names.length; i++) {
            console.log('hello!!! ' + names[i]);
        }

        let car = {
            model: "Golf",
            make: "Volkswagen",
            year: 1999,
            color: "black",
        };
        for (let prop in car) {
            console.log(car[prop]);
        }
    </script>


</head>

<body>

</body>

</html>