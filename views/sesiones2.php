<!DOCTYPE html>
<?php require_once 'php/theme_attr.php'; ?>
<html lang="es"<?= $data_theme_attr ?? '' ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css?v=<?php echo filemtime($__publicDir . '/assets/css/estilos.css'); ?>">
    <link rel="stylesheet" href="assets/css/pages/sesiones2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.3.1/dist/driver.css">
    <link rel="stylesheet"
        href="assets/css/components/driver-theme.css?v=<?php echo filemtime($__publicDir . '/assets/css/components/driver-theme.css'); ?>">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    $nav_back_url = "index.php";
    $nav_back_text = "Atrás";
    $nav_base = "./";
    require_once 'php/navbar.php';
    ?>

    <?php
    $categories = [
        [
            'title' => 'Juegos Móviles',
            'link' => 'games/juegos.php',
            'method' => 'Pago Básico - Pago Mixto',
            'description' => 'Ideal para compras rápidas de contenido digital y experiencias móviles con un flujo de pago simple, seguro y directo.',
            'accent' => '#FF6C0C',
            'secondary' => '#FF9C45',
            'icon_class' => 'fa-solid fa-gamepad',
            'caption' => 'Pago Básico',
            'preview_images' => [
                'https://media.tycsports.com/files/2021/07/15/307410/cod-mobile-todas-las-novedades-de-la-beta-de-julio-_862x485.jpg',
                'https://imagenes.hobbyconsolas.com/files/image_1280_720/uploads/imagenes/2023/04/25/690d3b41af1b7.jpeg',
                'https://media.es.wired.com/photos/64dad651532fc59e0e8d53a4/16:9/w_1280,c_limit/EA%20Sports.jpg'
            ]
        ],
        [
            'title' => 'Plataformas Digitales',
            'link' => 'plataformas/suscripciones.php',
            'method' => 'Recurrencia y Suscripción',
            'description' => 'Diseñada para servicios online con cobros periódicos, renovaciones automáticas y gestión de suscripciones.',
            'accent' => '#00CFB4',
            'secondary' => '#2FD8C5',
            'icon_class' => 'bi bi-google-play',
            'caption' => 'Recurrente',
            'preview_images' => [
                'https://www.dongee.com/tutoriales/content/images/2024/04/image-6.png',
                'https://imagenes.20minutos.es/files/image_1280_720/files/fp/uploads/imagenes/2024/06/26/redes-sociales.r_d.566-624-11532.jpeg',
                'https://www.clarin.com/2025/06/02/r8YhhzdFc_0x750__1.jpg'
            ]
        ],
        [
            'title' => 'Ropa',
            'link' => 'textil/textiles.php',
            'method' => 'Api link de pagos',
            'description' => 'Perfecta para tiendas de moda y ventas de productos físicos con confirmación rápida del pago.',
            'accent' => '#0062A8',
            'secondary' => '#3B87D7',
            'icon_class' => 'fa-solid fa-tshirt',
            'caption' => 'Venta digital',
            'preview_images' => [
                'https://kickbol.com/wp-content/uploads/2023/08/English-Premier-League-1.png',
                'https://logowik.com/content/uploads/images/laliga-santander5892.logowik.com.webp',
                'https://1000logos.net/wp-content/uploads/2019/01/Italian-Serie-A-Logo.png'
            ]
        ],
        [
            'title' => 'Tiquetes de Avión',
            'link' => 'dispersiones/dispersion.php',
            'method' => 'Dispersiones',
            'description' => 'Pensada para reservas aéreas y pagos de viaje con un proceso claro y confiable para el usuario.',
            'accent' => '#4C5F71',
            'secondary' => '#8193A5',
            'icon_class' => 'fa-solid fa-plane',
            'caption' => 'Reservas rápidas',
            'preview_images' => [
                'https://images.unsplash.com/photo-1516466723877-83f7d2d5d6e2?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=800&q=80'
            ]
        ],
        [
            'title' => 'Hospedaje',
            'link' => 'reservasiones/reservas.php',
            'method' => 'Preautorización',
            'description' => 'Ideal para reservas de hotel y servicios temporales con pagos seguros y confirmación inmediata.',
            'accent' => '#7D868C',
            'secondary' => '#A8B1BA',
            'icon_class' => 'fa-solid fa-hotel',
            'caption' => 'Reservas hoteleras',
            'preview_images' => [
                'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80'
            ]
        ]
    ];
    ?>

    <main class="container py-4 py-lg-5">
        <section class="hero-card p-4 p-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <h1 class="display-5 fw-bold mt-3 mb-3">Explora las integraciones de Place to Pay</h1>
                    <p class="lead mb-0">Selecciona una categoría</p>
                </div>
                <div class="col-lg-4">
                    <div class="hero-panel" id="lista-integraciones">
                        <ul class="mb-0 ps-3">
                            <li>Pago Básico</li>
                            <li>Recurrencia y Suscripción</li>
                            <li>Link de pagos con API</li>
                            <li>Dispersiones</li>
                            <li>Preautorización</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="row g-4">
            <?php foreach ($categories as $index => $category): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="card category-card h-100">
                        <div class="card-visual<?= !empty($category['preview_images']) ? ' card-visual-preview' : '' ?>">
                            <?php if (!empty($category['preview_images'])): ?>
                                <?php foreach ($category['preview_images'] as $preview): ?>
                                    <div class="card-preview-tile" style="background-image:url('<?= htmlspecialchars($preview) ?>');"></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="method-pill mb-3"<?= $index === 0 ? ' id="tour-card-method"' : '' ?>>
                                <i class="bi bi-shield-check"></i>
                                <?= htmlspecialchars($category['method']) ?>
                            </div>
                            <div class="card-title-row">
                                <span class="title-icon"><i class="<?= htmlspecialchars($category['icon_class']) ?>"></i></span>
                                <h5 class="card-title mb-0"<?= $index === 0 ? ' id="tour-card-title"' : '' ?>><?= htmlspecialchars($category['title']) ?></h5>
                            </div>
                            <p class="card-text mb-4"<?= $index === 0 ? ' id="tour-card-description"' : '' ?>><?= htmlspecialchars($category['description']) ?></p>
                            <a href="<?= htmlspecialchars($category['link']) ?>" class="btn btn-continue mt-auto align-self-start">Ver categoría <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/driver.js@1.3.1/dist/driver.js.iife.js"></script>
    <script src="assets/js/components/driver-tours/tour-sesiones2.js"></script>
</body>

</html>
