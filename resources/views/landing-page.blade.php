<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agrega estilos personalizados aquí */
    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación (opcional) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Mi Sitio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero" class="jumbotron text-center">
        <div class="container">
            <h1>Bienvenido a nuestra Página de Aterrizaje</h1>
            <p class="lead">¡Encuentra lo que necesitas con nosotros!</p>
            <a href="#about" class="btn btn-primary btn-lg">Acerca de</a>
            <a href="#contact" class="btn btn-secondary btn-lg">Contacto</a>
        </div>
    </section>

    <section id="about" class="container">
        <h2>Acerca de Nosotros</h2>
        <p>¡Somos una empresa dedicada a brindar soluciones increíbles!</p>
    </section>

    <section id="contact" class="container">
        <h2>Contacto</h2>
        <p>Ponte en contacto con nosotros en cualquier momento.</p>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </section>

    <footer class="text-center py-4">
        <div class="container">
            <p>&copy; 2024 Mi Sitio. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts de Bootstrap (jQuery y Popper.js necesarios para el funcionamiento de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
