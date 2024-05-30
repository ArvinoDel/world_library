<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="category-filter">
        <div class="container">
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

            <div class="filter-btns">
                <button type="button" class="filter-btn" id="all">All</button>
                <button type="button" class="filter-btn" id="horror">Horror</button>
                <button type="button" class="filter-btn" id="fantasy">Fantasy</button>
                <button type="button" class="filter-btn" id="drama">Drama</button>
            </div>

            <div class="filter-items">
                <div class="filter-item all new">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku1.jpg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all horror">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku2.jpg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all fantasy">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku3.jpg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all drama">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku4.jpg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price"></span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all horror">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku5.jpeg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all fantasy">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku6.jpeg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all drama">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku7.jpeg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>

                <div class="filter-item all horror">
                    <div class="item-img">
                        <img src="<?= base_url('img/buku8.jpeg') ?>" alt="Item Image">
                        <span class="discount">Free</span>
                    </div>
                    <div class="item-info">
                        <p>Lorem Ipsum</p>
                        <div>
                            <span class="old-price">Category: </span>
                            <span class="new-price">Free</span>
                        </div>
                        <a href="#" class="add-btn">Pinjam</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>