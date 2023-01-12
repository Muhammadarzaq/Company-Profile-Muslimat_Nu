<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="<?= base_url('/home') ?>" class="logo">
            <h5>Muslimat NU</h5>
            <!-- <img src="assets/img/logo.png" alt="Logo"> -->
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="<?= base_url('/home') ?>">
                    <h3>PGTK MUSLIMAT NU 90</h3>
                    <!-- <img src="assets/img/logo.png" alt="Logo"> -->
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('home') ?>" class="nav-link active">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('home/about') ?>" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Portfolio
                                        <i class='bx bx-chevron-right'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?= base_url('home/portfolio') ?>" class="nav-link">Portfolio Columns Three</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('/home/team') ?>" class="nav-link">Team</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        User
                                        <i class='bx bx-chevron-right'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="my-account.html" class="nav-link">My Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="log-in.html" class="nav-link">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-in.html" class="nav-link">Sign In</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('/home/blog') ?>" class="nav-link">
                                Blog
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('/home/contact') ?>" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <!-- Start Other Option -->
                    <div class="others-option">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="CARI DI SINI" type="text">
                            <button class="search-button" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>


                        <div class="menu-icon">
                            <a href="#" class="burger-menu">
                                <i class="flaticon-menu-button"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End Other Option -->
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->