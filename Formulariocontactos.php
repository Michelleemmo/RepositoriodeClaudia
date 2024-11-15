<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Contactos</title>
    <style type="text/css">
        body {
            background-color: #632432;
            font-family: Arial;
            color: black;
            width: 50%;
        }
        input[type="text"], input[type="telefono"], input[type="email"], textarea {
            font-size: 14px;
            margin: 10px auto;
            padding: 10px;
            width: calc(100% - 40px); 
        }
        textarea {
            height: 100px; 
        }
        fieldset{
            margin-top: 10%
            margin-left: 25%;
            padding-bottom: 5%;
            padding-top: 5%;
            border-radius: 10px;
            font-style: 16px;
            text-align: center;
            width: 50;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Contactos</legend>
    <form>
        <h2>Formulario de Contacto</h2>
        <label>Nombre</label><br>
        <input type="text" name="txtnombre" placeholder="Nombre Completo" required><br><br>

        <label>Correo Electrónico</label><br>
        <input type="email" name="txtcorreo" placeholder="user@gmail.com" required><br><br>

        <label>Número de Teléfono</label><br>
        <input type="telefono" name="txttelefono" placeholder="XXX-XX-XX" required><br><br>

        <label>Mensaje</label><br>
        <textarea name="txtmensaje" placeholder="Introduce tu sugerencia o comentario" required></textarea><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</fieldset>
</body>
</html>