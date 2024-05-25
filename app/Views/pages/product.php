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
        <div class="container" style="margin-bottom: -150px;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Books</p>
                <h1 class="mb-5">Let's See Our Books!</h1>
            </div>
        </div>
    </div>
    <section class="book section" id="book">
        <div class="book__container container grid">
            <div class="book__data">
                <h1 class="book__title">
                    Browse & Select <br>
                    Our Books!
                </h1>

                <p class="book__description">
                At our library, we take pride in offering an extensive collection of books that cater to a wide range of interests and preferences. Our shelves are filled with carefully curated selections, ensuring that every reader can find something that captivates their mind and nourishes their soul.
                </p>
            </div>
            <div class="book__images">
                <div class="book__swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="book__article swiper-slide">
                            <img src="<?= base_url('img/buku6.jpeg'); ?>" alt="image" class="book__img">
                        </article>
            
                        <article class="book__article swiper-slide">
                            <img src="<?= base_url('img/buku7.jpeg'); ?>" alt="image" class="book__img">
                        </article>
            
                        <article class="book__article swiper-slide">
                            <img src="<?= base_url('img/buku8.jpeg'); ?>" alt="image" class="book__img">
                        </article>
            
                        <article class="book__article swiper-slide">
                            <img src="<?= base_url('img/buku10.jpg'); ?>" alt="image" class="book__img">
                        </article>
            
                        <article class="book__article swiper-slide">
                            <img src="<?= base_url('img/buku11.jpeg'); ?>" alt="image" class="book__img">
                        </article>
                    </div>
                </div>
            </div>
            
                </div>
            </div>
        </div>
    </section>
 <br> <br>
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Books</p>
            <h1 class="mb-5">Wanna Read Some Books?</h1>
        </div>
        <div class="row gx-4">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= base_url('img/buku12.jpeg'); ?>" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-bookmarks"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Hide And Seek</a>
                        <span class="text-primary me-1">Free</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= base_url('img/buku21.jpeg'); ?>" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-bookmarks"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">The Deep Ocean</a>
                        <span class="text-primary me-1">Free</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item">
                    <div class="position-relative" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= base_url('img/buku13.jpeg'); ?>" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-bookmarks"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Alone</a>
                        <span class="text-primary me-1">Free</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= base_url('img/buku14.jpeg'); ?>" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-bookmarks"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Strategic Inovation</a>
                        <span class="text-primary me-1">Free</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="product-item" style="height: 95%;">
                    <div class="position-relative" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= base_url('img/buku15.jpeg'); ?>" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-bookmarks"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i
                                    class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">The Girl in The Woods</a>
                        <span class="text-primary me-1">Free</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?=$this->endsection(); ?>