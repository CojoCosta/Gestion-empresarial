<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    function formato($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }

    $error = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $campos = ["nombre", "apellidos, estudios, estado, genero"];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            foreach ($campos as $campo) {
                if (!isset($_POST[$campo]) || empty($_SERVER[$campo])) {
                    $error = true;
                    echo "<span style=\"color:red;\">El campo" . $campo . "es obligatorio</span><br>";
                } else {
                    $campos = filter_var($_POST[$campo], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }
            }
        }
        if (!isset($_POST['correo']) || empty($_SERVER['correo'])) {
            echo "<span style=\"color:red;\">El campo email no puede estar vacio</span><br>";
            $error = true;
        } else {
            $correo = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
            if(!filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)){
                echo "<span style=\"color:red;\">El campo email es obligatorio</span><br>";
            }
        }
    }



    ?>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>