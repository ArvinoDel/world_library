<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style5.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('img/logo-perpus.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('img/logo-perpus.png') ?>" type="image/x-icon">

    <!----===== Iconscout CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title><?= $title; ?></title>
</head>

<body>
    <?= $this->include('layout/navbar2', ['title_link' => $title_link]); ?>
    
    <?= $this->renderSection('content'); ?>

    <script src="<?php base_url('js/script.js') ?>"></script>
</body>

</html>