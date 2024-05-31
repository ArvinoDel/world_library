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
                            <img src="img/team-1.jpg" alt="Cover Buku" class="book-cover">
                            <br>
                            <div class="form-group">
                                <label class="form-label">ID</label>
                                <input type="text" value="1" name="title" class="form-control mb-1" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" value="Andreas" name="usn" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" value="Andreas Salaleo" name="nama" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" value="andreas@gmail.com" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="text" value="271007" name="password" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input type="text" value="Indonesia" name="country" class="form-control mb-1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="role">Role:</label>
                                <select class="custom-select" id="role" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Profile Picture</label>
                                <input type="file" name="profile" class="form-control mb-1" required>
                            </div>
                            <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>