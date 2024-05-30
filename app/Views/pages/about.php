<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?= $scrumb; ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/pages/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $scrumb; ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                <h1 class="mb-5">Experienced Team Members</h1>
            </div>

    <section class="about-home" id="home">
        <div class="about-home-content">
            <h1>Hi, It's <span class="about-logo-span">Andika</span></h1>
            <h3 class="about-text-animation">I'm a <span class="about-logo-span"></span></h3>
            <p>"Hi there! Thank you for visiting my page. I'm Andika, a CEO & CTO on WorldLibrary. Here, you'll find insights into my journey, achievements, and what inspires me every day. I appreciate your interest and look forward to connecting with you."</p>
            <div class="about-social-icons">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>

            <div class="about-btn-group">
                <a href="#" class="about-btn">Contact</a>
            </div>
        </div>
            <div class="about-home-img">
                <img src="<?= base_url('img/andika.png'); ?>" alt="">
            </div>
    </section>

    <section class="about-home" id="home">
        <div class="about-home-content">
            <h1>Hi, It's <span class="about-logo-span">Faiz</span></h1>
            <h3 class="about-text-animation2">I'm a <span class="about-logo-span"></span></h3>
            <p class="about-home">"Hello and welcome! I'm delighted to have you here. My name is Faiz, and I'm passionate about Backend. This page is a glimpse into my world, my experiences, and what drives me. Thank you for stopping by, and I hope you enjoy learning more about me.</p>
            <div class="about-social-icons">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>

            <div class="about-btn-group">
                <a href="#" class="about-btn">Contact</a>
            </div>
        </div>
            <div class="about-home-img">
                <img src="<?= base_url('img/faiz.jpg'); ?>" alt="">
            </div>
    </section>

    <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url('img/team-1.jpg'); ?>" alt="">
                        <h5>Arif Suseno</h5>
                        <p class="text-primary">Team</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url('img/vio.jpg'); ?>" alt="">
                        <h5>Vionna Nisa</h5>
                        <p class="text-primary">Team</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url('img/team-3.jpg'); ?>" alt="">
                        <h5>Muhammad Nur Nirvansyah</h5>
                        <p class="text-primary">Team</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<?=$this->endsection(); ?>