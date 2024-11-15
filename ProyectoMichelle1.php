<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Web</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #555;
        }

        /* Estilo para el header y navegación */
        header {
            background-color: #2c3e50; /* Color oscuro */
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navegacion {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .menu li {
            position: relative;
            margin: 0 25px;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 12px 20px;
            display: block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .menu a:hover {
            background-color: #2980b9; /* Color de hover */
            border-radius: 5px;
            transform: translateY(-3px); /* Efecto de elevación */
        }

        /* Estilos para los submenús */
        .sub-menu {
            list-style: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ecf0f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            border-radius: 5px;
            min-width: 160px;
        }

        .sub-menu li {
            padding: 10px;
        }

        .sub-menu li a {
            color: #34495e;
            font-size: 1rem;
        }

        .sub-menu li a:hover {
            background-color: #bdc3c7;
            color: #2c3e50;
        }

        /* Mostrar el submenú cuando se pasa el ratón sobre el elemento padre */
        .menu li:hover .sub-menu {
            display: block;
        }

        /* Estilo para el contenido */
        main {
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            max-width: 960px;
        }

        /* Estilo para la cabecera */
        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #7f8c8d;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                align-items: center;
            }

            .menu li {
                margin: 10px 0;
            }

            .sub-menu {
                position: relative;
                top: 0;
                left: 0;
                box-shadow: none;
            }

            main {
                padding: 20px;
                margin: 20px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="Inicio1.php">Inicio</a></li>
                <li><a href="visionymision.php">Nosotros</a></li>
                <li>
                    <a href="#">Tipos de Transtornos</a>
                    <ul class="sub-menu">
                        <li><a href="GrupoA.php">Grupo A</a></li>
                        <li><a href="GrupoB.php">Grupo B</a></li>
                        <li><a href="GrupoC.php">Grupo C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Formulariocontactos.php">Contactanos</a>
                    <ul class="sub-menu">
                        <li><a href="enviar-quejas.html">Encuentra ayuda</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenidos a nuestro sitio web</h1>
        <p>Explora los diferentes tipos de trastornos y obtén más información sobre cómo podemos ayudarte. Nuestro objetivo es ofrecerte los mejores recursos y el apoyo necesario para tu bienestar.</p>
    </main>
</body>
</html>
