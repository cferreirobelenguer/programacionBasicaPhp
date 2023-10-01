<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="basic.css">
</head>
<body>
    <div class="home">
        <h1 class="home__title" >Elija una opción:</h1>
        <div class="home__container">
            <button class="home--button" id="time" onClick='getTime()'>Calcular días, minutos y segundos</button>
            <button class="home--button" id='radio' onClick='getRadio()' >Calcular longitud y área de circunferencia de un radio</button>
            <button class="home--button" id='area' onClick='getArea()'>Calcular area y longitud de un triángulo</button>
        </div>
    </div>
    
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