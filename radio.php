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
</head>
<body>
    <h1>Por favor introduce el radio</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="radio" placeholder="Introduzca radio" required>
        <input type="submit" value="Enviar">
    </form>
    <p><?php echo getData() ?></p>
    <button onClick='goHome()'>Volver a menú</button>
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>