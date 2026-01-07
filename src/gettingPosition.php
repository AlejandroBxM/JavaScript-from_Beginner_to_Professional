<!DOCTYPE html>
<html>

<head>
    <style>
        canvas {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <canvas id="c1"></canvas>

    <script>
        let canvas = document.getElementById("c1");
        let ctx = canvas.getContext("2d");
        canvas.width = 500; //px
        canvas.height = 500; //px
        ctx.fillRect(20, 40, 100, 100);
        window.onload = init;

        function init() {
            navigator.geolocation.getCurrentPosition(showGeoPosition);
            console.dir(navigator.geolocation);
        }

        function showGeoPosition(data) {
            console.dir(data);
        }
    </script>
</body>

</html>