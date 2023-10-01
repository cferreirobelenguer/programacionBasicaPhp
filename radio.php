<?php

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
        <input type="submit" value="Enviar">
    </form>
    <button onClick='goHome()'>Volver a menú</button>
    <script>
        function goHome() {
            window.location.href='basic.php'
        }
    </script>
</body>
</html>