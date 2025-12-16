<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #8cd2f4, #2a69ac, #8cd2f4);
            background-size: 300% 300%;
            animation: fondoMovimiento 12s ease infinite;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            width: 100vW;
            height: 100vh;

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
            font-size: 36px;
            font-weight: 700;
            text-shadow: 0 3px 10px rgba(113, 210, 248, 0.25);
            margin-bottom: 25px;
            animation: entrada 0.8s ease;
        }

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

        /* TABLA */
        table {
            width: 90%;
            max-width: 1000px;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            animation: entrada 0.8s ease;
            color: #333;
            backdrop-filter: blur(5px);
        }

        th {
            padding: 14px;
            background: linear-gradient(45deg, #8cd2f4, #2a69ac, #8cd2f4);
            background-size: 200% 200%;
            animation: botonMovimiento 6s ease infinite;
            color: white;
            font-size: 17px;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
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

        td {
            padding: 14px;
            text-align: center;
            font-size: 15px;
            border-bottom: 1px solid #d6e9f5;
        }

        tr:nth-child(even) {
            background: #f0f7ff;
        }

        tr:hover {
            background: #dff1ff;
            transition: 0.3s ease;
        }

        /* IMÁGENES */
        td img {
            width: 80px;
            height: auto;
            border-radius: 10px;
            border: 2px solid #b8d9f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        /* BOTONES (links) */
        table a {
            text-decoration: none;
            font-weight: 700;
            color: #2a69ac;
            padding: 6px 12px;
            border-radius: 10px;
            background: #e6f3ff;
            transition: 0.3s;
            display: inline-block;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        table a:hover {
            background: #2a69ac;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
        }

        /* Enlace inferior */
        .return-link {
            margin-top: 25px;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            text-decoration: none;
            transition: 0.3s;
        }

        .return-link:hover {
            color: #e8f7ff;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
        }
    </style>

</head>

<body>
    <h1>Listado de usuarios</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        <?php
        for ($i = 0; $i < count($result); $i++) {
        ?>
            <tr>
                <td><?php echo $result[$i]['nombre'] ?></td>
                <td><?php echo $result[$i]['apellidos'] ?></td>
                <td><?php echo $result[$i]['edad'] ?></td>
                <td><?php echo $result[$i]['telefono'] ?></td>
                <td><img src= "<?php  echo "../".$result[$i]['imagen'] ?> "alt="foto" style="width:90px;height:auto;" </td>
                <td><?php echo "<a href=\"../controladores/controladorEditar.php?id={$result[$i]['id']}\">Editar<a/>" ?></td>
                <td><?php echo "<a href=\"../controladores/controladorBorrar.php?id={$result[$i]['id']}\">Borrar<a/>" ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php echo "<br><a href=../index.php>Volver al formulario principal</a>"; ?>
</body>

</html>