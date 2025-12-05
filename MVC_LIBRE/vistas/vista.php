<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
    <style>
        th{
            width: 150px;
        }
        td{
            text-align: center;
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
        </tr>
        <?php
            for ($i=0; $i < count($result); $i++) { 
        ?>
        <tr>
            <td><?php echo $result[$i]['nombre'] ?></td>
            <td><?php echo $result[$i]['apellidos'] ?></td>
            <td><?php echo $result[$i]['edad'] ?></td>
            <td><?php echo $result[$i]['telefono'] ?></td>
            <td><img src="../" <?php echo $result[$i]['imagen']?> alt="foto" style="width:90px;height:auto;"</td>
            <td><?php echo "<a href=\"../controladores/controladorEditar.php?id={$result[$i]['id']}\">Editar<a/>" ?></td>
            <td><?php echo "<a href=\"../controladores/controladorBorrar.php?id={$result[$i]['id']}\">Borrar<a/>" ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php echo "<br><a href=../index.php>Volver al formulario principal</a>"; ?>
</body>
</html>
