<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // 1. Array de contraseñas permitidas
        const allowedPasswords = [
            "admin123",
            "password2024",
            "flechoDJ",
            "securePass!"
        ];

        // 2. Función login que valida si la contraseña existe
        function login(password) {
            return allowedPasswords.includes(password);
        }

        // 3. Función que retorna una Promise
        function validatePassword(password) {
            return new Promise((resolve, reject) => {
                const isValid = login(password);

                if (isValid) {
                    resolve({
                        valid: true,
                        message: "Password accepted"
                    });
                } else {
                    reject({
                        valid: false,
                        message: "Password rejected"
                    });
                }
            });
        }

        // 4. Función que revisa la contraseña usando then() y catch()
        function checkPassword(password) {
            validatePassword(password)
                .then(result => {
                    console.log(`SUCCESS: ${password}`, result);
                })
                .catch(error => {
                    console.log(`ERROR: ${password}`, error);
                });
        }

        // 5. Probar varias contraseñas
        checkPassword("admin123"); // válida
        checkPassword("123456"); // inválida
        checkPassword("flechoDJ"); // válida
        checkPassword("hackerman"); // inválida
        checkPassword("securePass!"); // válida
    </script>
</head>

<body>

</body>

</html>