<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <!-- If user image is available in database -->
        <img src="<?= base_url('img/user.png'); ?>" alt="">
    </div>

    <div class="dash-content">
        <div class="overview">
            <div class="tab-content">
                <hr class="border-light m-0">
                <div class="title">
                    <i class="uil uil-plus"></i>
                    <span class="text">Add Buku</span>
                </div>
                <form action="<?= base_url('/pages/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control mb-1" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kategori">Kategori</label>
                            <select class="custom-select" id="kategori" name="kategori" required>
                                <option value="Horror">Horror</option>
                                <option value="Fantasi">Fantasi</option>
                                <option value="Drama">Drama</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Cover</label>
                            <input type="file" name="cover" class="form-control mb-1" required>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>

                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="book">
        <div class="title">
            <i class="uil uil-book-alt"></i>
            <span class="text">Data Buku</span>
        </div>

        <div class="book-data">
            <table>
                <thead>
                    <tr class="data-list">
                        <th class="data-title">#</th>
                        <th class="data-title">Cover</th>
                        <th class="data-title">Name</th>
                        <th class="data-title">Date</th>
                        <th class="data-title">Category</th>
                        <th class="data-title">Writer</th>
                        <th class="data-title">Penerbit</th>
                        <th class="data-title">Total</th>
                        <th class="data-title">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($buku) && !empty($buku)): ?>
                        <?php foreach ($buku as $book): ?>
                            <tr class="data-list">
                                <td><span class="data id"><?= $book['id']; ?></td>
                                <td><img src="<?= base_url('image/' . $book['cover']); ?>" alt="<?= $book['judul']; ?>" class="cover"></td>
                                <td><span class="data judul"><?= $book['judul']; ?></td>
                                <td><span class="data date"><?= $book['tahun']; ?></td>
                                <td><span class="data category"><?= $book['kategori_id']; ?></td>
                                <td><span class="data writer"><?= $book['penulis_id']; ?></td>
                                <td><span class="data penerbit"><?= $book['penerbit_id']; ?></td>
                                <td><span class="data jumlah"><?= $book['jumlah']; ?></td>
                                <td>
                                    <a href="<?= base_url('buku/edit/' . $book['id']); ?>" class="btn btn-edit">Edit</a>
                                    <a href="<?= base_url('buku/delete/' . $book['id']); ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">Tidak ada data buku.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
