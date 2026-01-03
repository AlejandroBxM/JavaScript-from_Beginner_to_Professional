<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        let val = 10;

        function tester(val) {
            val += 10;
            if (val < 100) {
                return tester(val);
            }
            return val;
        }
        tester(val);
        console.log(val);

        let testFunction = function() {
            console.log("Hello");
        }();
    </script>
</head>

<body>

</body>

</html>