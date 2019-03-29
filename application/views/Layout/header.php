<body class="home-one">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="<?php echo base_url(); ?>img/logo.png" alt="logo"></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                        <ul class="menu navbar-right">
                    <?php if($this->session->userdata('loggedIn')):?>
                    <li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><i class="fa fa-user"></i><?php echo $this->session->userdata('username'); ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                             <div class="yamm-content">
                                    <hr class="customhr" />
                                    <a href="<?=site_url('pelanggan/profil/'.$this->session->userdata('id_pelanggan'))?>" style="color:#555555;"><i class="fa fa-user"></i>Akun Saya</a><hr class="customhr" />
                                    <a href="<?=site_url('pelanggan/alamat/'.$this->session->userdata('id_pelanggan'))?>" style="color:#555555;"><i class="fa fa-book"></i>Notifikasi</a><hr  class="customhr"/>
                                    <a href="<?=site_url('pelanggan/data_order/'.$this->session->userdata('id_pelanggan'))?>" style="color:#555555;"><i class="fa fa-list"></i>Data Pemesanan</a><hr  class="customhr"/>
                                    <a href="<?=site_url('Home/Logout')?>" style="color:#555555;"><i class="fa fa-power-off"></i>Logout</a><hr  class="customhr"/>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <?php else: ?>                    
                    <li><a href="#" data-toggle="modal" data-target="#login-modal"> <i class="fa fa-user"></i> Login </a></li>
                    <?php endif; ?>                
                </ul>
                
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="index.html">home</a>
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="about-company-profile.html">About Profile</a></li>
                                        <li><a href="about-company-history.html">About History</a></li>
                                        <li><a href="about-company-report.html">About Report</a></li>
                                        <li><a href="about-team.html">About Team</a></li>
                                        <li><a href="about-support.html">About Support</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Service</a>
                                    <ul>
                                        <li><a href="service.html">Service Version 1</a></li>
                                        <li><a href="service-2.html">Service Version 2</a></li>
                                        <li><a href="service-3.html">Service Version 3</a></li>
                                        <li><a href="single-service.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Other Pages</a>
                                    <ul>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Version 1</a></li>
                                        <li><a href="blog-2.html">Blog Version 2</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a>
                                    <ul>
                                        <li><a href="contact.html">Contact Version 1</a></li>
                                        <li><a href="contact-2.html">Contact Version 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-md">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Login </h4>
                    </div>
                    <div class="modal-body">
                         <form role="form" action="<?php echo base_url(); ?>index.php/UserControler/prosesLogin" method="post">
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>

                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button>
                            </div>
                        </form>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
