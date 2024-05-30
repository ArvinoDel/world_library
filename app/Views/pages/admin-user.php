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
                        <span class="text">Add Users</span>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" name="role" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input type="text" name="country" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="kategori">Role:</label>
                                <select class="custom-select" id="kategori" name="kategori">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Picture</label>
                                <input type="file" name="picture" class="form-control mb-1" required>
                            </div>
                            <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="book">
            <div class="title">
                <i class="uil uil-book-alt"></i>
                <span class="text">Data Users</span>
            </div>

            <div class="book-data">
                <table class="book-table">
                    <thead>
                        <tr class="data-list">
                            <th class="data-title">#</th>
                            <th class="data-title">Pict</th>
                            <th class="data-title">Name</th>
                            <th class="data-title">Email</th>
                            <th class="data-title">Password</th>
                            <th class="data-title">Country</th>
                            <th class="data-title">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- dibikin foreach -->
                        <tr class="data-list">
                            <td><span class="data id">1</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <!-- ini dibikin kondisi apabila status completed maka span class status completed
                                kalo status pending ya pending class nya
                                -->
                            <td><span class="data country">Indonesia</span> </td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">2</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span></td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">3</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span></td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">4</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span></td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">5</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span>
                            </td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">6</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span>
                            </td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <tr class="data-list">
                            <td><span class="data id">7</span></td>
                            <td><img src="<?= base_url('img/team-1.jpg') ?>" alt="" class="cover"></td>
                            <td><span class="data name">Andika</span></td>
                            <td><span class="data email">andikasupriyadi@gmail.com</span></td>
                            <td><span class="data password">271007</span></td>
                            <td><span class="data country">Indonesia</span>
                            </td>
                            <td><span class="data role">Admin</span> </td>
                        </tr>
                        <br>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?= $this->endSection(); ?>
