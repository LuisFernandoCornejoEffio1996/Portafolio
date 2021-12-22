<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portafolio online del desarrollador Luis Fernando Cornejo Effio.">
        <meta name="keywords" content="desarrollador front-end y backend">
        <meta name="author" content="Luis Fernando Cornejo Effio">
        <title>Luis Cornejo Effio | Desarrollador</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&family=Cute+Font&family=Open+Sans:wght@500;700&family=PT+Serif:ital,wght@1,400;1,700&family=Stalinist+One&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/codigo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="contenedor">
            <div class="contenedor-nav">
            <nav class="nav">
                    <div class="logo">LF</div>                     
                    <div class="nav-open">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="menu">                        
                        <div class="nav-close">
                            <i class="fas fa-bars"></i>
                        </div>
                        <li><a href="#home" class="selected">Inicio</a></li>
                        <li><a href="#about">Sobre mi</a></li>
                        <li><a href="#skills">Habilidades</a></li>
                        <li><a href="#briefcase">Portafolio</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </nav>
            </div>            
        </div>
        <section id="home" class="home">
            <div id="home-dif">
                <div class="home-texto">
                    <div id="foto">
                        <img src="img/luis.png" alt="mi foto" class="miFoto" >
                    </div>
                    <h2 id="home-name">Luis Fernando Cornejo Effio</h2>
                    <div id="ubicacion">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="11" r="3" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>            
                        <p>Monsefú - Chiclayo</p>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/menu.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>