<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let terribleThingToDo = undefined;
        let lastName;
        console.log("Same undefined:", lastName === terribleThingToDo);
        let betterOption = null;
        console.log("Same null:", lastName === betterOption);


        testVariable = 1;
        variableTypeTest1 = typeof testVariable;
        variableTypeTest2 = typeof(testVariable);
        console.log(variableTypeTest1);
        console.log(variableTypeTest2);

        let str = "Hello";
        let nr = 7;
        let bigNr = 12345678901234n;
        let bool = true;
        let sym = Symbol("unique");
        let undef = undefined;
        let unknown = null;

        let age = 10;
        let cost = 0;
        let message;

        if (age < 3) {
            cost = 0;
            message = "Access is free under three.";
        } else if (age >= 3 && age < 12) {
            cost = 5;
            message = "With the child discount, the fee is 5 dollars";
        } else if (age >= 12 && age < 65) {
            cost = 10;
            message = "A regular ticket costs 10 dollars.";
        } else {
            cost = 7;
            message = "A ticket is 7 dollars.";
        }
        if (age < 3) {
            console.log("Access is free under three.");
        } else if (age < 12) {
            console.log("With the child discount, the fee is 5 dollars");
        } else if (age < 65) {
            console.log("A regular ticket costs 10 dollars.");
        } else if (age >= 65) {
            console.log("A ticket is 7 dollars.");
        }


        console.log(message);
        console.log("Your Total cost " + cost);

        /* operators ternaries*/
        let access = age < 18 ? "denied" : "allowed";
        age < 18 ? console.log("denied") : console.log("allowed");

        if (activity === "Get up") {
            console.log("It is 6:30AM");
        } else if (activity === "Breakfast") {
            console.log("It is 7:00AM");
        } else if (activity === "Drive to work") {
            console.log("It is 8:00AM");
        } else if (activity === "Lunch") {
            console.log("It is 12.00PM");
        } else if (activity === "Drive home") {
            console.log("It is 5:00PM")
        } else if (activity === "Dinner") {
            console.log("It is 6:30PM");
        }


        switch (activity) {
            case "Get up":
                console.log("It is 6:30AM");
                break;
            case "Breakfast":
                console.log("It is 7:00AM");
                break;
            case "Drive to work":
                console.log("It is 8:00AM");
                break;
            case "Lunch":
                console.log("It is 12:00PM");
                break;
            case "Drive home":
                console.log("It is 5:00PM");
                break;
            case "Dinner":
                console.log("It is 6:30PM");
                break;
        }
    </script>
</head>

<body>

</body>

</html>