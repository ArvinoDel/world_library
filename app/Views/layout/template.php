<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('img/logo-perpus.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('img/logo-perpus.png') ?>" type="image/x-icon">
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style2.css') ?>">
    <script src="<?= base_url('css/style6.css') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.css">
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <style>
        .page-header {
            background: url(<?= $bg; ?>) center center no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>

    <!-- INI ISI NYA -->
    <?= $this->include('layout/navbar', ['title_link' => $title_link]); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('lib/parallax/parallax.min.js') ?>"></script>
    <script src="<?= base_url('lib/lightbox/js/lightbox.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>
    <script src="<?= base_url('js/main2.js') ?>"></script>
    <script src="<?= base_url('js/main3.js') ?>"></script>
    
</body>

</html>