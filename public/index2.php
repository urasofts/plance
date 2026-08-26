<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plance | Centro de recursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800&family=Barlow:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet"
        href="assets/css/estilos.css?v=<?php echo filemtime(__DIR__ . '/assets/css/estilos.css'); ?>">
    <link rel="stylesheet"
        href="assets/css/pages/index2.css?v=<?php echo filemtime(__DIR__ . '/assets/css/pages/index2.css'); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.3.1/dist/driver.css">

    <link rel="stylesheet"
        href="assets/css/components/driver-theme.css?v=<?php echo filemtime(__DIR__ . '/assets/css/components/driver-theme.css'); ?>">

</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    $nav_back_url = "index.php";
    $nav_back_text = "Atrás";
    $nav_base = "./";
    require_once 'php/navbar.php';
    ?>

    <main class="container px-3 py-2">

        <div class="hero-panel">
            <p class="hero-copy">
                Activa el tutorial para una guía paso a paso.
            </p>
        </div>

        <section class="hero-header text-center pt-4">
            <h1 id="heroTitle" class="hero-title">
                Bienvenido&nbsp;&nbsp;a&nbsp;&nbsp;<span>Plance</span>
            </h1>
        </section>

        <!-- <section id="heroPanel" class="hero-panel">
        </section> -->



        <section class="py-0 resources-section">
            <div class="hero-intro">
                <div class="resources-badge"><i class="bi bi-stars"></i> Centro de recursos</div>

            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4" id="tarjetas">
                <div class="col">
                    <a href="sesiones.php" id="sesiones" class="resource-card">
                        <div class="resource-icon">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h3>Ejemplos de integraciones</h3>
                        <p>Aquí podrás ver como seria el proceso de compra dentro del sitio web de un comercio y que
                            tipo de
                            integración con Place to Pay se asocia
                            ese flujo.</p>
                        <span class="resource-cta">Ver ejemplos <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>

                <div class="col">
                    <a href="guias/guia-user.php" id="guia-user" class="resource-card">
                        <div class="resource-icon">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <h3>Guía de usuario</h3>
                        <p>Aprende sobre PlacetoPay y conoce los principales conceptos, términos y
                            soluciones relacionados con la integración de comercios, pagos, suscripciones y
                            transacciones en la plataforma.</p>
                        <span class="resource-cta">Leer guía <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>

                <div class="col">
                    <a href="guias/guia-developer.php" id="guia-developer" class="resource-card">
                        <div class="resource-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h3>Guía developer</h3>
                        <p>Accede a la parte técnica de la integración, estructura del proyecto y
                            recursos clave para implementar los servicios de PlacetoPay de forma ordenada.</p>
                        <span class="resource-cta">Interactuar con la guía <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <!-- Librería Driver.js: debe cargarse antes de tutorial.js -->
    <script src="https://cdn.jsdelivr.net/npm/driver.js@1.3.1/dist/driver.js.iife.js"></script>
    <script src="assets/js/components/driver-tours/tour-index2.js"></script>
</body>

</html>