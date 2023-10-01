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
</head>
<body>
    <h1>Por favor introduce los lados de un triángulo:</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type='number' name="lado_a" placeholder='Introduzca lado a' required>
        <input type='number' name="lado_b" placeholder='Introduzca lado b' required>
        <input type='number' name="lado_c" placeholder='Introduzca lado c' required>
        <input type="submit" value="Enviar">
    </form>
    <p><?php echo getArea() ?></p>
    <button onClick='goHome()'>Volver a menú</button>
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>