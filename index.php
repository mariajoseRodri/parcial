<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar">
                <div class="brand">
                </div>
                <ul class="menu">
                    <li><a href="#main" class="active">Inicio</a></li>
                    <li><a href="#about">Quien Soy</a></li>
                    <li><a href="#portfolio">Portafolio</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <main class="main"id="main">
            <img src="majo.jpg" alt="">
            <div class="info-content">
                <h1><span>Maria jose</span> Rodriguez</h1>
                <p>
                    Estudiante de ingenieria de sistemas
                </p>
            </div>

        </main>
    </div>
    <div class="about"id="about">
        <img src="fotomajo.jpg" alt="">
        <div class="about-info">
            <h2>Acerca de mi:</h2>
            <div class="divider"></div>
            <h4>
                <p>
                    Hola mi nombre es maria José estudiante de ingeniería 
                    de sistemas soy una persona responsable, con 
                    aspiraciones y deseos de superación; aprendo con 
                    rapidez y me intereso por cumplir de manera adecuada
                    con la puntualidad y responsabilidad en las distintas
                    actividades que realizo. Dispuesto a cumplir con las 
                    distintas funciones, obligaciones y normas laborales que
                    tengan establecidas, me presento con gran entusiasmo a
                    esta entidad, y así formar parte del cumplimiento de 
                    metas planteadas en cada misión. gusta crear diseños 
                    que incentiven e involucren a las personas en 
                    interesarse en esto.
                </p>
            </h4>
        </div>
    </div>
    <div class="portfolio"id ="portfolio">
        <div class="portfolio-heading">
            <h2>Portafolio</h2>
            <div class="divider"></div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card__img">
                    <div class="card_img"><img src="certificado1.png" alt="imagen1"></div>
                </div>
                
            </div>
            <div class="card">
                <div class="card__img">
                    <div class="card_img"><img src="certificado2.png" alt="imagen2"></div>
                </div>
                
            </div>
            <div class="card"> 
                <div class="card__img">
                    <div class="card_img"><img src="certificado3.png" alt="imagen3"></div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="contact-section"id="contact">
        <div class="contact-heading">
            <h2>Contacto</h2>
            <div class="divider"></div>
        </div>
        <div class="container-contact">
            <img src="majo.jpg" alt="">
            <div class="contact-form">
                <h4>Enviame un mensaje ...</h4>
                <form class="form-group">
                    <input type="text" placeholder="Nombre" class="input">
                    <input type="email" placeholder="Email" class="input">
                    <textarea name="message" placeholder="Mensaje..."></textarea>
                    <button type="submit" class="btn-submit">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer"> 
        <div class="footer-content">
            <h2>Maria jose rodriguez</h2>
            <h5>Estudiante de ingenieria de sistemas</h5>
        </div>
        <div class="sotial-networks">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter-square"></i>
        </div>
    </footer>
</body>
</html>