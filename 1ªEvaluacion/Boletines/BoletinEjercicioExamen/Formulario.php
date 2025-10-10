<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de suscripción</title>
    
    <style>
        * {
            margin-top: 10px;
        }
        div{
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <h2 class="display-1">Suscripción a revistas</h2>
    <form class="form" action="recogidaDatos.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" name="apellido1" id="apellido1">
            <br>
            <label for="apellido2">Segundo apellido:</label>
            <input type="text" name="apellido2" id="apellido2">
            <br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" id="correo">
        </div>
        <div>
            <label for="interes">¿Desea recicibir información sobra las publicaciones?</label><br>
            <input type="radio" name="interes" value="si"><span>Sí, estoy interesado</span><br>
            <input type="radio" name="interes"  value="no"><span>No, gracias</span>
            <br>
        </div>
        <div>
            <label for="checks">Publicaciones disponibles:</label><br>
            <input type="checkbox" name="national" id=""><span>National Geographic</span><br>
            <input type="checkbox" name="electronic" id=""><span>Electronic Letters</span><br>
            <input type="checkbox" name="conocer" id=""><span>Conocer</span><br>
            <input type="checkbox" name="science" id=""><span>Science</span><br>
            <input type="checkbox" name="desarrollo" id=""><span>Desarroll Web</span><br>
        </div>
        <div>
            <label for="suscripcion">Formas de suscripción: </label>
            <select name="suscripcion" id="suscripcion">
                <option value="elegir" default>Elegir</option>
                <option value="semanal">Semanal</option>
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>
            </select>
        </div>
        <button type="submit">Suscribirme</button>
    </form>
</body>

</html>