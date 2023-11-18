<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoleteriaCampin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">BoleteriaCampin</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#informacion">Curiosidades</a></li>
                    <li><a href="login.php">Iniciar Sesion</a></li>
                    <li><a href="#registro">Registro</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container" id="inicio">
            <div class="header-txt">
                <h1>Boleteria el Campin</h1>
                <p>
                    Multiples eventos se presentan en la ciudad, reserva tus boletas para ver grandes conciertos y tambien disfrutar del buen futbol colombiano,
                    no te quedes con las ganas, reserva ya tus entradas.
                </p>
                <p>
                El Estadio Nemesio Camacho "El Campín" tiene una capacidad aproximada de alrededor de 36,343 
                espectadores. Sin embargo,el estadio ha sido sometido a varias renovaciones a lo largo de los años 
                para mejorar las instalaciones y cumplir con los estándares modernos. La capacidad puede variar 
                dependiendo de la configuración del evento, ya que algunos eventos pueden requerir asientos 
                adicionales o espacio para la infraestructura temporal.
                </p>
            </div>
            <div class="header-img">
                <img src="images/luis-diaz.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container" id="informacion">

        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>

        <div class="about-txt">
            <h2>Curiosidades</h2>
            <p>
            El Estadio Nemesio Camacho, conocido comúnmente como El Campín, es un estadio de fútbol
             ubicado en Bogotá, Colombia. Fue inaugurado el 10 de agosto de 1938 y es uno de los estadios 
             más emblemáticos del país. 
             El Campín ha sido sede de diversos eventos deportivos y culturales, 
             incluyendo conciertos de música, eventos religiosos y más. Es un lugar icónico para los aficionados 
             al fútbol en Colombia y ha sido testigo de numerosos momentos emocionantes en la historia del deporte 
             en el país.
            </p>
        </div>
    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-solid fa-soccer-ball"></i>
                <h3>Partidos</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-ticket"></i>
                <h3>Eventos</h3>
            </div>
        </div>
    </main>

    <section class="formulario container" id="registro">

        <form method="post" action="">
            <h2>Registrarse</h2>

            <div class="input-group">
                
                <div class="input-container">
                    <input type="text" name="nombre" placeholder="nombre">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="email">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="password" name="password" placeholder="contraseña">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">BoleteriaCampin</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#informacion">Curiosidades</a></li>
                    <li><a href="login.php">Iniciar Sesion</a></li>
                    <li><a href="#registro">Registro</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/paginaweb"
        }
    </script>
    
</body>
</html>