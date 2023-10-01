<?php
/**
 * Cálculo de area de circunferencia y longitud
 */
    function getData() {
        if (isset($_POST["radio"])) {
            if ( $_POST["radio"] < 0) {
                return "No se puede realizar la operación ya que los datos son negativos";
            } else {
                //radio
                $radio = $_POST["radio"];
                 //longitud
                $longitud = 2 * M_PI * $radio;
                //area
                $area = M_PI * pow($radio, 2);
                // resultado
                return "Área de la circunferencia: " . $area . "<br>Longitud : " . $longitud;
            }
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="radio.css">
</head>
<body>
    <div class="radio">
        <h1 class="radio__title" >Por favor introduce el radio</h1>
        <div class="radio__container">
            <form class="radio__form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input class="radio--input" type="number" name="radio" placeholder="Introduzca radio" required>
                <input class="radio--button" type="submit" value="Enviar">
            </form>
        </div>
        <p class="radio__subtitle" ><?php echo getData() ?></p>
        <button class="radio--button" onClick='goHome()'>Volver a menú</button>
    </div>
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>