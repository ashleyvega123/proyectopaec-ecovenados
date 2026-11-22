<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Gracias por tu compromiso! | ECO-VENADOS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            padding: 40px 20px;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        .caja-titulo {
            background-color: #556B2F;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .mensaje {
            background: white;
            padding: 30px;
            border-radius: 10px;
            border: 3px solid #556B2F;
            margin-bottom: 30px;
        }
        .mensaje h2 {
            color: #556B2F;
            margin-bottom: 20px;
        }
        .mensaje p {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 10px;
        }
        .contenedor-inferior {
            margin-top: 30px;
        }
        .boton {
            display: inline-block;
            background-color: #556B2F;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 8px;
            margin: 0 8px;
            font-size: 16px;
            font-weight: bold;
        }
        .boton-finalizar {
            background-color: #6b7f3f;
            border: 2px solid #556B2F;
        }
    </style>
</head>
<body>

    <div class="caja-titulo">
        <h1>¡GRACIAS POR TU COMPROMISO!</h1>
    </div>

    <div class="mensaje">
        <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $edad = htmlspecialchars($_POST['edad']);
        $grupo = htmlspecialchars($_POST['grupo']);
        $residuo = htmlspecialchars($_POST['residuo_frecuente']);
        $separas = htmlspecialchars($_POST['separas_residuos']);
        $accion = htmlspecialchars($_POST['accion_ambiental']);
        $compromiso = htmlspecialchars($_POST['compromiso']);
        $comentario = htmlspecialchars($_POST['comentario']);

        echo "<h2>¡Bienvenido, $nombre!</h2>";
        echo "<p><strong>Edad:</strong> $edad años &nbsp;|&nbsp; <strong>Grupo:</strong> $grupo</p>";
        echo "<p><strong>Residuo que generas más:</strong> $residuo</p>";
        echo "<p><strong>¿Separas tus residuos?</strong> $separas</p>";
        echo "<p><strong>Acción que realizas:</strong> $accion</p>";
        echo "<p style='font-size:19px; color:#556B2F; font-weight:bold;'>Tu compromiso: $compromiso</p>";
        echo "<p><strong>Tu propuesta:</strong> $comentario</p>";
        echo "<p style='margin-top:20px; font-weight:bold; color:#556B2F;'>¡Gracias por cuidar el medio ambiente con nosotros!</p>";
        ?>
    </div>

    <div class="contenedor-inferior">
        <a href="indice.html" class="boton">Volver al Índice</a>
        <a href="proyectopaec.html" class="boton boton-finalizar">Finalizar</a>
    </div>

</body>
</html>
