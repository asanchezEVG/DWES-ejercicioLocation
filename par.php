<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Número Par</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                margin: 0;
                padding: 20px;
                text-align: center;
            }

            #titulo {
                color: #27ae60;
                margin-bottom: 20px;
            }

            p {
                font-size: 1.5em;
                margin: 10px 0;
            }

            .container {
                background-color: rgba(141, 200, 210, 0.296);
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 35%;
                margin: 0 auto;
            }

            a {
                background-color: #3faa81df;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100px;
                display: block;
                margin: auto;
                margin-top: 3%;
                font-size: 15px;
                text-decoration: none;
            }

            a:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
                echo '<h1 id="titulo">Número par</h1><p>Número: '.$_GET['numero'].'</p><p>Cuadrado: '.$_GET['cuadrado'].'</p>';
            ?>
            <a href="formulario.html">Volver</a>
        </div>
    </body>
</html>