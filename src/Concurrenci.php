<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        let promise = new Promise(function(resolve, reject) {
            // do something that might take a while
            // let's just set x instead for this example
            let x = 20;
            if (x > 10) {
                resolve(x); // on success
            } else {
                reject("Too low"); // on error
            }
        });
        promise.then(
            function(value) {
                console.log("Success:", value);
            },
            function(error) {
                console.log("Error:", error);
            }
        );

        function judge(grade) {
            switch (true) {
                case grade == "A":
                    console.log("You got an", grade, ": amazing!");
                    break;
                case grade == "B":
                    console.log("You got a", grade, ": well done!");
                    break;
                case grade == "C":
                    console.log("You got a", grade, ": alright.");
                    break;
                case grade == "D":
                    console.log("You got a", grade, ": hmmm...");
                    break;
                default:
                    console.log("An", grade, "! What?!");
            }
        }

        function getGrade(score, callback) {
            let grade;
            switch (true) {
                case score >= 90:
                    grade = "A";
                    break;
                case score >= 80:
                    console.log(score);
                    grade = "B";
                    break;
                case score >= 70:
                    grade = "C";
                    break;
                case score >= 60:
                    grade = "D";
                    break;
                default:
                    grade = "F";
            }
            callback(grade);
        }
        getGrade(85, judge);
    </script>
</head>

<body>

</body>

</html>