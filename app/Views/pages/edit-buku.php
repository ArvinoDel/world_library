<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <!-- hubungin ke database, kalo ada fotonya -->
        <img src="<?= base_url('img/user.png') ?>" alt="">
        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        <div class="overview">
            <div class="tab-content">
                <hr class="border-light m-0">
                <div class="title">
                    <i class="uil uil-plus"></i>
                    <span class="text">Edit Buku</span>
                </div>
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" value="The lil boy" name="title" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Penulis</label>
                            <input type="text" value="Andika" name="penulis" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Penerbit</label>
                            <input type="email" value="faiz" name="penerbit" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jumlah</label>
                            <input type="number" value="20" name="jumlah" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kategori">Kategori:</label>
                            <select class="custom-select" id="kategori" name="kategori">
                                <option value="horror">Horror</option>
                                <option value="fantasi">Fantasi</option>
                                <option value="drama">Drama</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Cover</label>
                            <input type="file" name="cover" class="form-control mb-1" required>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<?= $this->endSection(); ?>