<?php
    require './includes/funciones.php';
    echo __DIR__;
    $consulta = obtener_servicio();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="contenedor-estetica">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige tus Servicios a Continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php
                        while($servicios = mysqli_fetch_assoc($consulta)) { ?>
                        <div class="servicio">
                            <p class="nombre-servicio"> <?php echo $servicios['Nombre'];?> </p>
                            <p class="precio-servicio"> <?php echo $servicios['Precio'];?> </p>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>