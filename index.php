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
            <div class="contenedor-nav" id="contenedor-nav">
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
        <section id="about">
            <div class="descripcion centrar-texto sombra">                       
                <h3>Perfil</h3>            
                <p class="descripcion__text">
                    Soy estudiante de ingenier&iacute;a de sistemas, dedicado al desarrollo de software, tanto para web como escritorio. 
                    <br/>
                    Me considero una persona autodidacta y critica conmigo mismo, me gusta mejorar cada vez m&aacute;s y afrontar nuevos retos.
                </p>   
                <a href="<!-- CV-Luis Cornejo Effio.pdf -->" download="CV Luis Fernando Cornejo Effio" class="btnCV">Descargar CV</a>
            </div>
        </section>
        <section id="skills">
            <div class="habilidades centrar-texto">
                <h3>Mis Skills</h3>
                <div class="skills">
                    <div class="skill">
                        <img class="skill__imagen" src="img/bootstrap.png" alt="Bootstrap"> 
                        <div class="skill__descripcion">
                            <p>Bootstrap</p>
                            <p>Intermedio</p>
                        </div>
                    </div> 
                    <div class="skill">
                        <img class="skill__imagen" src="img/css.png" alt="CSS">
                        <div class="skill__descripcion">
                            <p>Css</p>
                            <p>Intermedio</p>
                        </div>
                    </div> 
                    <div class="skill">
                        <img class="skill__imagen" src="img/github.png" alt="github">
                        <div class="skill__descripcion">
                            <p>github</p>
                            <p>Basico</p>
                        </div>
                    </div> 
                    <div class="skill">
                        <img class="skill__imagen" src="img/html-5.png" alt="html">
                        <div class="skill__descripcion">
                            <p>HTML</p>
                            <p>Intermedio</p>
                        </div>
                    </div> 
                    <div class="skill">
                        <img class="skill__imagen" src="img/java.png" alt="Java">
                        <div class="skill__descripcion">
                            <p>Java</p>
                            <p>Intermedio</p>
                        </div>
                    </div> 
                    <div class="skill">
                        <img class="skill__imagen" src="img/php-code.png" alt="php">
                        <div class="skill__descripcion centrar-texto">
                            <p>PHP</p>
                            <p>Intermedio</p>
                        </div>
                    </div> 
                </div>   
            </div>
        </section>
        <section id="briefcase">
            <div class="projects centrar-texto">                        
                <h3 class="centrar-texto">Mis Proyectos</h3>
                <div class="works">
                    <div class="work">                            
                        <img class="work__imagen" src="img/descarga.jpg" alt="php">
                        <div class="work__descripcion centrar-texto">
                            <h4>Trabajo 1</h4>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="form centrar-texto">
                <form action="" method="post">
                    <h3>Contacto</h3>
                    <div class="form-group">
                        <label for="">Nombre: </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Correo: </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Asunto: </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Mensaje: </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                </form>
            </div>    
        </section>
        <footer class="contenedor-footer centrar-texto">
            <div class="redes-sociales">
                <div class="contenedor-icono">
                    <a href="https://www.facebook.com/fernando.ce.16" target="_blank" class="facebook"> 
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <div class="contenedor-icono">
                    <a href="https://github.com/LuisFernandoCornejoEffio1996" target="_blank" class="git-hub">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <div class="contenedor-icono">
                    <a href="https://wa.me/51926660568" target="_blank" class="gmail">
                        <i class="far fa-envelope"></i>
                    </a>
                </div>
            </div>
            <div class="derechos">
                <p>Todos los derechos reservados 2021 - Luis Fernando Cornejo Effio </p>
            </div>            
        </footer>
        <script src="js/menu.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>