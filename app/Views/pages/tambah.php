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
            <img src="img/user.png" alt="">
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="tab-content">
                    <hr class="border-light m-0">
                    <div class="title">
                        <i class="uil uil-plus"></i>
                        <span class="text">Add Buku</span>
                    </div>
                    <form action="" method="POST">
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
                                <input type="email" name="penerbit" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control mb-1" required>
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
                            <div class="form-group">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control mb-1" required>
                            </div>
                            <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
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
                        </tr>
                    </thead>
                    <tbody>
                        <!-- dibikin foreach -->
                        <tr class="data-list">
                            <td><span class="data id">1</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-12</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <!-- ini dibikin kondisi apabila status completed maka span class status completed
                                kalo status pending ya pending class nya
                                -->
                            <td><span class="data writer">Andika SNM</span> </td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">2</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-12</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span></td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">3</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-13</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span></td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">4</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-13</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span></td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">5</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-14</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span>
                            </td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">6</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-14</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span>
                            </td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">7</span></td>
                            <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                            <td><span class="data title">The Woman without name</span></td>
                            <td><span class="data date">2022-02-15</span></td>
                            <td><span class="data Category">Horror</span></td>
                            <td><span class="data writer">Andika SNM</span>
                            </td>
                            <td><span class="data penerbit">M. Faiz F</span> </td>
                            <td><span class="data jumlah">12</span> </td>
                        </tr>
                        <br>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>

<?= $this->endSection(); ?>