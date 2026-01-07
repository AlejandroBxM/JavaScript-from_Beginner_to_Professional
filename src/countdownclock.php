<!doctype html>
<html>

<head>
    <title>JavaScript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

       #clock {
            background-color: blue;
            width: 100%;
            text-align: center;
            color: white;
            font-size: 24px;
            margin-top: 20px;
        }

        #clock>span {
            padding: 10px;
            border-radius: 10px;
            background-color: black;
            margin-right: 10px;
        }

        #clock>span>span {
            padding: 5px;
            border-radius: 10px;
            background-color: red;
        }

        input {
            padding: 15px;
            margin: 20px;
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <h2>Countdown Clock</h2>

    <div>
        <input type="date" name="endDate" id="endDate">
        <div id="clock"> <span><span class="days">0</span> Days</
                    span> <span><span class="hours">0</span>
                    Hours</span> <span><span class="minutes">0</span>
                    Minutes</span> <span><span class="seconds">0</span>
                    Seconds</span>
        </div>
    </div>
    <script>
        // 1. Select page elements
        const endDateInput = document.getElementById('endDate');
        const clock = document.getElementById('clock');
        const clockValues = clock.querySelectorAll('span');

        // 2. Variables for interval and counter state
        let timeInterval;
        let counterActive = true;

        // 3. Check localStorage
        const savedCountdown = localStorage.getItem('countdown');

        if (savedCountdown) {
            // 4. Start clock with saved value
            endDateInput.value = savedCountdown;
            startClock(savedCountdown);
        }

        // 5. Listen for input change
        endDateInput.addEventListener('change', () => {
            clearInterval(timeInterval);
            localStorage.setItem('countdown', endDateInput.value);
            counterActive = true;

            // 6. Start clock with new value
            startClock(endDateInput.value);
        });

        // 7. Start clock function
        function startClock(endTime) {

            function updateClock() {
                const timeLeft = getTimeLeft(endTime);

                // 8. Check if time is over
                if (timeLeft.total <= 0) {
                    stopClock();
                    return;
                }

                // 9. Output values dynamically
                for (const prop in timeLeft) {
                    const el = clock.querySelector(`.${prop}`);
                    if (el) {
                        el.innerHTML = timeLeft[prop];
                    }
                }
            }

            updateClock();
            timeInterval = setInterval(updateClock, 1000);
        }

        // 8 (helper). Stop clock
        function stopClock() {
            counterActive = false;
            clearInterval(timeInterval);
        }

        // 10. Time left function
        function getTimeLeft(endTime) {
            const total = Date.parse(endTime) - Date.parse(new Date());

            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));

            return {
                total,
                days,
                hours,
                minutes,
                seconds
            };
        }

        // 11. Safety check if expired
        if (!counterActive && savedCountdown) {
            clearInterval(timeInterval);
        }
    </script>
</body>

</html>