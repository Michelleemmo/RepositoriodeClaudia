<!DOCTYPE html>
<html>
<head>
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
    align-items: left;
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
    $rutaImagen = "Emocionales.jpg";
    ?>

    <!-- Imagen con efecto hover -->
  <center>  <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover"> </center>
													<h2>Emocionales Erraticos-Dramáticos</h2> 
                                                    <p></p>
                                                    <p>Son caracterizados por las emociones intensas y cambiantes por la impulsividad, dificultad para mantener relaciones</p><p>sentimientos de vacio y abandono, autolesiones o intentos de suicidio</p>
                                                    <h2>Antisocial</h2>
                                                    <p>Es caracterizado por un patron de comportamiento que muestra una faltta de respeto por las normas y leyes sociales</p><p>y una falta de empatia por los demas</p>
                                                    <h2>Borderline-límite</h2>
                                                    <p>Es un transtorno de personalidad caracterizado por un patron de comportamiento emocionalmente intensivo, inestable y dificil de manejar</p>
                                                    <h2>Histriónico</h2>
                                                    <p>Es un transtorno caracterizado por un patron de comportamiento emocionalmente</p><p>intensivo, dramatico, y attentin-seeking</p>
                                                    <h2>Narcisista</h2>
                                                    <p>Es caracterizado por un patron de comportamiento grandioso, necesidad de admiracion y falta de empatia hacia los demas</p>
                                                    

</body>
</html>