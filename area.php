<?php
/**
 * description: Area y longitud triángulo
 * return: string
 */
    function getArea() {
        if (isset($_POST["lado_a"]) && isset($_POST["lado_b"]) && isset($_POST["lado_c"])) {
            if ( $_POST["lado_a"] < 0 || $_POST["lado_b"] < 0 || $_POST["lado_c"] < 0) {
                return "No se puede realizar la operación ya que los datos son negativos";
            } else {
                // lados triángulo
                $a = $_POST["lado_a"];
                $b = $_POST["lado_b"];
                $c = $_POST["lado_c"];
        
                // semiperímetro
                $s = ($a + $b + $c) / 2;
        
                // area
                $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        
                // longitud
                $longitud = $a + $b + $c;
        
                // resultado
                return "Área del triángulo: " . $area . "<br>Longitud total de los lados: " . $longitud;
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
    <link rel="stylesheet" href="area.css">
</head>
<body>
    <div class="area">
        <h1 class="area__title">Por favor introduce los lados de un triángulo:</h1>
        <div class="area__container">
            <form class="area__form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input class="area--input" type='number' name="lado_a" placeholder='Introduzca lado a' required>
                <input class="area--input" type='number' name="lado_b" placeholder='Introduzca lado b' required>
                <input class="area--input" type='number' name="lado_c" placeholder='Introduzca lado c' required>
                <input class="area--button" type="submit" value="Enviar">
            </form>
        </div>
        <p class="area__subtitle"><?php echo getArea() ?></p>
        <button class="area--button" onClick='goHome()'>Volver a menú</button>
    </div>
    
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>