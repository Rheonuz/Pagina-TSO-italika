<!DOCTYPE html>}
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italika | Proyecto TSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --italika-red: #d71920;
            --italika-black: #1a1a1a;
	    --italika-white: #ffffff;
        }
        .bg-italika { background-color: var(--italika-red) !important; }
        .text-italika { color: var(--italika-red) !important; }
	.textW-italika { color: var(--italika-white) !important; }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1558981806-ec527fa84c39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .card-valores { transition: transform 0.3s; border: none; }
        .card-valores:hover { transform: translateY(-10px); }
        footer { background-color: var(--italika-black); color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ITALIKA <span class="text-italika"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#valores">Valores</a></li>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-lg-3" href="login.php">Acceso Administrativo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="inicio" class="hero-section text-center">
        <div class="container">
            <h1 class="display-2 fw-bold">Tu Italika siempre al 100</h1>
            <p class="lead mb-4">El motor de tu camino, con piezas de verdad.</p>
            <a href="#nosotros" class="btn btn-outline-light btn-lg">Conócenos</a>
        </div>
    </header>

    <section id="nosotros" class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6">
                    <div class="p-4 border-start border-4 border-danger bg-light shadow-sm mb-4">
                        <h2 class="text-italika fw-bold">Nuestra Misión</h2>
                        <p class="lead">Brindar refacciones y accesorios de calidad para motocicletas de la marca Italika, ofreciendo a nuestros clientes productos confiables, atención personalizada y soluciones rápidas para el mantenimiento y rendimiento de sus unidades.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 border-start border-4 border-dark bg-light shadow-sm">
                        <h2 class="fw-bold">Nuestra Visión</h2>
                        <p class="lead">Ser una empresa reconocida como referente en la venta de refacciones para motocicletas Italika, destacando por nuestra confianza, calidad y compromiso con los clientes. Buscamos consolidarnos como la primera opción en el mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="valores" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold text-italika">Nuestros Valores</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card bg-secondary text-white p-3 card-valores h-100">
                        <h4>Calidad</h4>
                        <p class="small">Productos garantizados bajo estándares originales.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-secondary text-white p-3 card-valores h-100">
                        <h4>Compromiso</h4>
                        <p class="small">Atención rápida para que nunca dejes de rodar.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-secondary text-white p-3 card-valores h-100">
                        <h4>Honestidad</h4>
                        <p class="small">Transparencia total en precios y diagnósticos.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-secondary text-white p-3 card-valores h-100">
                        <h4>Innovación</h4>
                        <p class="small">Vanguardia en piezas para los modelos más nuevos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-5 pb-3">
        <div class="container">
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md-4 mb-3">
                    <h5 class="textW-italika">Ubícanos</h5>
                    <p class="small text-muted">Av. Tecnológico #123, <br>Col. Lindavista, Oaxaca de Juárez, Oax.</p>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <h5 class="textW-italika">Horario de Atención</h5>
                    <p class="small text-muted">Lunes a Sábado: 9:00 AM - 7:00 PM<br>Domingos: Cerrado</p>
                </div>
                <div class="col-md-4 mb-3 text-end">
                    <h5 class="textW-italika">Contacto</h5>
                    <p class="small text-muted">Tel: 951 123 4567<br>Email: contacto@italikatec.com</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="small text-muted">&copy; 2026 Proyecto Taller de Sistemas Operativos - Instituto Tecnológico de Oaxaca.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
