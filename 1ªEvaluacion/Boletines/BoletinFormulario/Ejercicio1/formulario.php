<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        *{
            margin: 10px;
        }
    </style>
</head>

<body>
    <h2 class="display-1">Ejericio 1</h2>
    <form class="form" action="datos.php" method="post">
        <label for="precio">Precio: </label>
        <input type="text" class="precio" id="precio" name="precio">
        <br>
        <label for="cantidad">Cantidad: </label>
        <input type="text" class="cantidad" id="cantidad" name="cantidad">
        <br>
        <label for="descuento">Descuento: </label>
        <input type="text" class="descuento" id="descuento" name="descuento">
        <br>
        <label for="iva">IVA: </label>
        <input type="text" class="iva" id="iva" name="iva"><span>%</span>
        <br>
        <label for="envio">Método de envío: </label>
        <select name="envio" id="envio">
            <option selected value="recoger">Recoger en tienda</option>
            <option value="correos">Correos</option>
            <option value="seur">Seur</option>
        </select>
        <br>
        <button type="submit" id="boton" class="boton">Calcular precio total</button>
    </form>
</body>

</html>