<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        class Vehicle {
            constructor(color, currentSpeed, maxSpeed) {
                this.color = color;
                this.currentSpeed = currentSpeed;
                this.maxSpeed = maxSpeed;
            }
            move() {
                console.log("moving at", this.currentSpeed);
            }
            accelerate(amount) {
                this.currentSpeed += amount;
            }
        }

        class Motorcycle extends Vehicle {
            constructor(color, currentSpeed, maxSpeed, fuel) {
                super(color, currentSpeed, maxSpeed);
                this.fuel = fuel;
            }
            doWheelie() {
                console.log("Driving on one wheel!");
            }
        }
    </script>
</head>

<body>

</body>

</html>