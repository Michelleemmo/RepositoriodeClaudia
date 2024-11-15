
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
    $rutaImagen = "Excentricos.jpg";
    ?>

    <!-- Imagen con efecto hover -->
  <center>  <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover"> </center>
													<h2>Raros Excéntricos</h2>
                                                    <p></p>
													<h2>Paranoide</h2>
                                                    <br>Es un transtorno de personalidad caracterizado por un patrón de comportamiento y pensamiento paranoides que incluye</p>
                                                    <p>desconfianza y sospecha excesiva a los demas </p>
                                                    <p>Creencia de que los demas tienen intenciones maliciosas</p>
                                                    <p>Tendencia a interpretar hechos neutrales como amenazanes</p>
                                                    <h2>Esquizoide</h2>
                                                    <br>Caracterizado por un patrón de comportamiento y pensamiento que incluye</p>
                                                    <p>Dificultad para expresar emociones</p>
                                                    <p>Falta de interes en las relaciones sociales</p>
                                                    <p>Pensamientos y comportamientos excentricos</p>
                                                    <h2>Esquizotípico </h2>
                                                    <p>Son un grupo de condiciones psiquiatricas caracterizadas por sintomas que se asemejan a la esquiziofrenia, pero no cumplen con los criterios diagnostigos completos para esta condición</p>
													

</body>
</html>