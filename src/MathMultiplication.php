<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // 1. Crear un arreglo vacío para la tabla final
        let multiplicationTable = [];

        // 2. Definir cuántos valores tendrá la tabla (ej: del 1 al 10)
        let value = 10;

        // 3. Bucle externo: recorre las filas
        for (let i = 1; i <= value; i++) {
            // Arreglo temporal para cada fila
            let row = [];

            // 4. Bucle interno: recorre las columnas
            for (let j = 1; j <= value; j++) {
                row.push(i * j);
            }

            // 5. Agregar la fila calculada a la tabla final
            multiplicationTable.push(row);
        }

        // Mostrar el resultado en consola
        console.table(multiplicationTable);
    </script>
</head>

<body>

</body>

</html>