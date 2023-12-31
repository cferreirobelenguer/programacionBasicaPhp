<?php
    function getTime() {
        if (isset($_POST['segundos'])) {
            if ($_POST['segundos'] > 0 ) {
                $segundos = $_POST['segundos'];
                $minutos = floor($segundos / 60);
                $segundos = $segundos % 60;

                $horas = floor($minutos / 60);
                $minutos = $minutos % 60;

                $dias = floor($horas / 24);
                $horas = $horas % 24;

                return "Días: ". $dias. "<br>Horas: ".$horas. "<br>Minutos: ".$minutos. "<br>Segundos: ".$segundos;
            } else {
                return "No se puede mostrar resultado ya que los datos introducidos son negativos";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de tiempo</title>
    <link rel="stylesheet" href="time.css">
</head>
<body>
    <div class="time">
        <h1 class="time__title">Por favor introduce los segundos</h1>
        <div class="time__container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input class="time--input" type="number" name="segundos" placeholder="Introduce los segundos" required>
                <input class="time--button" type="submit" value="Enviar">
            </form>
        </div>
        <p class="time__subtitle" ><?php echo getTime() ?></p>
        <button onClick='goHome()' class="time--button">Volver a menú</button>
    </div>
    
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>