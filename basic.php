<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elija una opción:</h1>
    <button id="time" onClick='getTime()'>Calcular días, minutos y segundos</button>
    <button id='radio' onClick='getRadio()' >Calcular longitud y área de circunferencia de un radio</button>
    <button id='area' onClick='getArea()'>Calcular area y longitud de un triángulo</button>
    <script>
        function getTime() {
            window.location.href='time.php';
        }

        function getRadio() {
            window.location.href='radio.php';
        }

        function getArea() {
            window.location.href='area.php';
        }

    </script>
</body>
</html>