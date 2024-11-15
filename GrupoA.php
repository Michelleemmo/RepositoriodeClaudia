
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #a3c9f1; /* Azul claro */
    display: flex;
    justify-content: left;
    text-align: left;
    min-height: 50vh;
    flex-direction: column;
}

    /* Estilo básico para la imagen */
    .imagen-hover {
        width: 300px;
        height: auto;
        transition: transform 0.3s ease, filter 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efecto cuando el puntero pasa sobre la imagen */
    .imagen-hover:hover {
        transform: scale(1.1); /* Amplía ligeramente la imagen */
        filter: brightness(80%) sepia(20%) hue-rotate(190deg); /* Filtro de color azul claro */
        box-shadow: 0 0 15px rgba(163, 201, 241, 0.7); /* Agrega un resplandor azul claro */
    }
</style>
</head>
<body>
<?php
    // Ruta de la imagen
    $rutaImagen = "Temerosos.jpg";
    ?>

    <!-- Imagen con efecto hover -->
  <center>  <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover"> </center>

													<h2>Ansiosos Temerosos</h2>
                                                    <p></p>
                                                    <h2>Dependiente</h2>
                                                    <p>Es un estado mental en que las personas dependen demaciado de otras para satisfacer sus necesidades emocionales y fisicas</p>
                                                    <h2>Evasivo</h2>
                                                    <p>Este transtorno prima la baja autoestima y los sentimientos de inadecuacion,el temor a ser rechazado a relaciones intrapersonales y miedo a sufrir riesgos y cambios</p>
                                                    <h2>Obsesivo</h2>
                                                    <p>Las personas con este transtorno de personalidad creen que sus pensamientos son correctos</p><p>y ademas estan obsesionadas con el perfeccionalismo y el control de si mismas y de las situaciones para mantener un sentido de control</p>
                                                    <h2>Compulsivo</h2>
                                                    <p>Es un transtorno caracterizado por una actitud emocionante restringida que es excesivamente convencional, seria, formal y tacaña</p>

                                                    
</body>
</html>