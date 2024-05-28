<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="<?= base_url('img/logo-perpus.png'); ?>" alt="">
            </div>

            <span class="logo_name">WorldLibrary</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/pages/admin" class="nav-item nav-link <?php if($title_link == "admin"){ echo 'active';} ?>">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="/pages/tambah" class="nav-item nav-link <?php if($title_link == "tambah"){ echo 'active';} ?>">
                        <i class="uil uil-book-alt"></i>
                        <span class="link-name">Books</span>
                    </a></li>
                <li><a href="/pages/user" class="nav-item nav-link <?php if($title_link == "user"){ echo 'active';} ?>">
                        <i class="uil uil-user-square"></i>
                        <span class="link-name">Users</span>
                    </a></li>
                <li><a href="/pages/pinjam" class="nav-item nav-link <?php if($title_link == "pinjam"){ echo 'active';} ?>">
                        <i class="uil uil-folder-medical"></i>
                        <span class="link-name">Peminjaman</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>