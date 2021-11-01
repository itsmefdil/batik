<!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-five header-style-eight">
            <div class="header-top-wrap">
                <div class="container custom-container-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-6">
                            <div class="header-top-link">
                                <ul>
                                    <li><a href="about-us.html">About US</a></li>
                                    <li><a href="#">FAQS</a></li>
                                    <li><a href="tel:123456789">PH +1 325 362 3521</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="header-top-right">
                                <div class="lang">
                                    <select name="select">
                                        <option value="">English</option>
                                        <option value="">Spanish</option>
                                        <option value="">Turkish</option>
                                        <option value="">Russian</option>
                                        <option value="">Chinese</option>
                                    </select>
                                </div>
                                <div class="currency">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">USD</option>
                                            <option value="">AUE</option>
                                            <option value="">SAR</option>
                                            <option value="">INR</option>
                                            <option value="">BDT</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <?php $system = $this->db->where('id',1)->get('tb_tentang')->row_array()?>
                                        <a href="<?= base_url()?>"><img src="<?= base_url()?>uploads/system/logo-vertikal.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation left">
                                            <li class=" menu-item-has-children has--mega--menu"><a href="<?= base_url()?>">Home</a>
                                            </li>
                                            <li class="has--mega--menu"><a href="<?= base_url()?>shop">Store</a>
                                
                                            </li>
                                        </ul>
                                        <div class="logo">
                                            <a href="index.html"><img src="<?= base_url()?>uploads/system/<?= $system['foto']?>" alt="Logo"></a>
                                        </div>
                                        <ul class="navigation right">
                                            <li class="menu-item-has-children"><a href="#">About</a>
                                               
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                            <li class="header-profile"><a href="<?= base_url()?>login"><i class="flaticon-user"></i></a></li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">

                                    <div class="nav-logo responsive"><a href="index.html"><img src="<?= base_url()?>uploads/system/logo-vertikal.png"  alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class=" menu-item-has-children"><a href="#">Home</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo mb-30">
                                        <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>WooCommerce and WordPress are both free, open source software reasons many ...</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444 0000</a></li>
                                            <li><span class="flaticon-email"></span><a href="mailto:adara@info.com">adara@info.com</a></li>
                                            <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email...">
                                            <button class="btn">Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="oc-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="oc-bottom">
                                        <div class="currency">
                                            <form action="#">
                                                <label>Currency</label>
                                                <select name="select">
                                                    <option value="">USD</option>
                                                    <option value="">AUE</option>
                                                    <option value="">SAR</option>
                                                    <option value="">INR</option>
                                                    <option value="">BDT</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="language">
                                            <form action="#">
                                                <label>Language</label>
                                                <select name="select">
                                                    <option value="">English</option>
                                                    <option value="">Spanish</option>
                                                    <option value="">Turkish</option>
                                                    <option value="">Russian</option>
                                                    <option value="">Chinese</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- off-canvas-end -->

        </header>
        <!-- header-area-end -->
