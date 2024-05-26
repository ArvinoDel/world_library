
    <nav class="navbar navbar-expand-lg bg-custom-gold navbar-light sticky-top px-4 px-lg-3">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0">WorldLibrary</h2>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/pages/" class="nav-item nav-link <?php if($title_link == "home"){ echo 'active';} ?>">Home</a>
                <a href="/pages/about" class="nav-item nav-link  <?php if($title_link == "about"){ echo 'active';} ?>">About</a>
                <a href="/pages/contact" class="nav-item nav-link <?php if($title_link == "contact"){ echo 'active';} ?>">Contact</a>
                <a href="/pages/product" class="nav-item nav-link  <?php if($title_link == "product"){ echo 'active';} ?>">Products</a>
                <div class="btn-group dropstart p-4">
                    <img src="<?=base_url('img/user.png') ?>" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="width: 33px; height: 33px; border-radius: 50%;">
                    <div class="dropdown-menu p-2" style="width: 400px;">
                        <div class="text-center">
                            <img src="<?=base_url('img/user.png')?>" style="width: 60px; height: 60px; border-radius: 50%;" class="mx-5">
                            <p class="pgrf" style="text-align: center;">
                            <h4><?php echo session('user')['username'] ?></h4>
                            <h5 class="form-text"><?php echo session('user')['email'] ?></h5>
                            <hr>
                            </p>
                            <form action="/profile" method="post">
                            <button type="submit" style="border: none; outline:none; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M3.25233 19.1932H18.744C18.8656 19.1932 18.9821 19.1449 19.0681 19.0589C19.154 18.973 19.2023 18.8564 19.2023 18.7348C19.2023 18.6133 19.154 18.4967 19.0681 18.4107C18.9821 18.3248 18.8656 18.2765 18.744 18.2765H3.25233C3.13077 18.2765 3.0142 18.3248 2.92824 18.4107C2.84229 18.4967 2.794 18.6133 2.794 18.7348C2.794 18.8564 2.84229 18.973 2.92824 19.0589C3.0142 19.1449 3.13077 19.1932 3.25233 19.1932ZM8.90083 15.7483C9.28803 15.64 9.64132 15.4349 9.9275 15.1525L18.6725 6.4075C18.972 6.10684 19.1401 5.69977 19.1401 5.27542C19.1401 4.85106 18.972 4.44399 18.6725 4.14333L17.8108 3.29083C17.5059 2.99957 17.1004 2.83704 16.6787 2.83704C16.2571 2.83704 15.8516 2.99957 15.5467 3.29083L6.80167 12.0267C6.51873 12.311 6.31628 12.6652 6.215 13.0533L5.53667 15.5833C5.50448 15.6989 5.50365 15.821 5.53426 15.9369C5.56487 16.0529 5.62582 16.1587 5.71083 16.2433C5.84058 16.3709 6.01473 16.4432 6.19667 16.445L8.90083 15.7483ZM9.27667 14.5017C9.10768 14.6737 8.89556 14.7972 8.6625 14.8592L7.77333 15.0975L6.85667 14.1808L7.095 13.2917C7.15912 13.0595 7.28228 12.8479 7.4525 12.6775L7.80083 12.3383L9.625 14.1625L9.27667 14.5017ZM10.2758 13.5117L8.45167 11.6875L14.6208 5.51833L16.445 7.3425L10.2758 13.5117ZM18.0217 5.76583L17.0958 6.69167L15.2717 4.8675L16.1975 3.9325C16.2612 3.86853 16.3369 3.81777 16.4203 3.78314C16.5037 3.7485 16.5931 3.73068 16.6833 3.73068C16.7736 3.73068 16.863 3.7485 16.9464 3.78314C17.0297 3.81777 17.1055 3.86853 17.1692 3.9325L18.0217 4.79417C18.1495 4.92354 18.2212 5.0981 18.2212 5.28C18.2212 5.46189 18.1495 5.63646 18.0217 5.76583Z" fill="black" />
                                </svg>
                                Edit Your Profile Information <br>
                            </button>
                            </form>
                            <form action="/logout" method="post">

                                <button type="submit" style="border: none; outline:none; background-color:white;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M5.50001 1.83333H13.75C14.2362 1.83333 14.7026 2.02649 15.0464 2.3703C15.3902 2.71412 15.5833 3.18044 15.5833 3.66667V5.5H13.75V3.66667H5.50001V18.3333H13.75V16.5H15.5833V18.3333C15.5833 18.8196 15.3902 19.2859 15.0464 19.6297C14.7026 19.9735 14.2362 20.1667 13.75 20.1667H5.50001C5.01377 20.1667 4.54746 19.9735 4.20364 19.6297C3.85983 19.2859 3.66667 18.8196 3.66667 18.3333V3.66667C3.66667 3.18044 3.85983 2.71412 4.20364 2.3703C4.54746 2.02649 5.01377 1.83333 5.50001 1.83333Z" fill="black" />
                                        <path d="M14.7492 14.2908L16.0417 15.5833L20.625 11L16.0417 6.41667L14.7492 7.70917L17.1142 10.0833H8.25V11.9167H17.1142L14.7492 14.2908Z" fill="black" />
                                    </svg>
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" class="dropdown-item">Gallery</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->