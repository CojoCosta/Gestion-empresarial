<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos usuario</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #8cd2f4, #2a69ac, #8cd2f4);
            background-size: 300% 300%;
            animation: fondoMovimiento 12s ease infinite;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        @keyframes fondoMovimiento {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            margin-top: 40px;
            font-size: 34px;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(113, 210, 248, 0.25);
            animation: entrada 0.8s ease;
        }

        /* Animación de entrada */
        @keyframes entrada {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Contenedor del formulario */
        form {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 40px;
            margin-top: 20px;
            border-radius: 18px;
            width: 350px;
            display: flex;
            flex-direction: column;
            gap: 18px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.25);
            color: #333;
            backdrop-filter: blur(5px);
            animation: entrada 0.8s ease;
            text-align: center;
        }

        /* Inputs */
        form input[type="text"],
        form input[type="number"],
        form input[type="tel"],
        form input[type="file"] {
            padding: 12px;
            border: 2px solid #b8d9f0;
            border-radius: 12px;
            font-size: 15px;
            transition: 0.25s;
            background: #fff;
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus,
        form input[type="tel"]:focus,
        form input[type="file"]:focus {
            border-color: #2a69ac;
            box-shadow: 0 0 10px rgba(42, 105, 172, 0.5);
        }

        /* Botón */
        form input[type="submit"] {
            padding: 14px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-size: 17px;
            font-weight: 700;
            color: white;
            background: linear-gradient(45deg, #8cd2f4, #2a69ac, #ffffff);
            background-size: 200% 200%;
            animation: botonMovimiento 4s ease infinite;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            margin-top: 10px;
        }

        @keyframes botonMovimiento {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        form input[type="submit"]:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        }

        /* Imagen del usuario */
        .preview-img {
            width: 120px;
            height: auto;
            border-radius: 10px;
            border: 2px solid #b8d9f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <h1>Editar datos del usuario</h1>
    <form action="../controladores/controladorActualizar.php" method="post">
        <input type="text" name="nombre" id="nombre" value="<?php echo $dato[0]['nombre'] ?>">
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $dato[0]['apellidos'] ?>">
        <input type="text" name="edad" id="edad" value="<?php echo $dato[0]['edad'] ?>">
        <input type="tel" name="tlf" id="tlf" value="<?php echo $dato[0]['telefono'] ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
        <input type="file" name="imagen" id="imagen"><br>
        <td><img src="<?php echo "../".$dato[0]['imagen'] ?>" alt="imagen" style="width:90px;height:auto;" </td>
            <input type="submit" value="Actualizar">
    </form>
</body>

</html>