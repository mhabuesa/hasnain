<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <header class="ec-header">
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="{{ asset($general_info->logo) }}" alt="Site Logo" />
                                </a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                    <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                            class="fi-rr-user"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><i class="fi-rr-heart"></i></div>
                                    <span class="ec-header-count">4</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                                    <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('frontend') }}/images/logo/logo-8.png"
                                    alt="Site Logo" /><img class="dark-logo"
                                    src="{{ asset('frontend') }}/images/logo/dark-logo-8.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Banner Full width 4
                                                        column</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Columns
                                                        Variation</a></li>
                                                <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                                <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">List Variation</a>
                                                </li>
                                                <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.html">Banner left
                                                        sidebar</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                        sidebar</a></li>
                                                <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                                            class="img-responsive"
                                                            src="{{ asset('frontend') }}/images/menu-banner/1.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{ asset('frontend') }}/images/menu-banner/2.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                            class="img-responsive"
                                                            src="{{ asset('frontend') }}/images/menu-banner/3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{ asset('frontend') }}/images/menu-banner/4.jpg"
                                                            alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                                <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                video
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                gallery
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.html">Gallery left
                                                        sidebar</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.html">Product full width</a></li>
                                        <li><a href="product-360-full-width.html">360 full width</a></li>
                                        <li><a href="product-video-full-width.html">Video full width</a></li>
                                        <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="terms-condition.html">Terms Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="javascript:void(0)">Others</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Confirmation
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a>
                                                </li>
                                                <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a>
                                                </li>
                                                <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a>
                                                </li>
                                                <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a>
                                                </li>
                                                <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                                password
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-forgot-password-1.html">Reset password
                                                        1</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-2.html">Reset password
                                                        2</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-3.html">Reset password
                                                        3</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-4.html">Reset password
                                                        4</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-5.html">Reset password
                                                        5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Promotional
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                                <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                                <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                                <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                                <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                                <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                                <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                                <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-hot"></span>
                                            <a href="javascript:void(0)">Vendor account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                                <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                                <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                                <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-trending"></span>
                                            <a href="javascript:void(0)">User account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="user-history.html">History</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="user-invoice.html">Invoice</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                                pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="404-error-page.html">404 error page</a></li>
                                                <li><a href="under-maintenance.html">maintanence page</a></li>
                                                <li><a href="coming-soon.html">Coming soon page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-new"></span>
                                            <a href="javascript:void(0)">Vendor Catalog pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">Blog full width</a></li>
                                        <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu">
                                        <li><a href="elemets-products.html">Products</a></li>
                                        <li><a href="elemets-typography.html">Typography</a></li>
                                        <li><a href="elemets-title.html">Titles</a></li>
                                        <li><a href="elemets-categories.html">Categories</a></li>
                                        <li><a href="elemets-buttons.html">Buttons</a></li>
                                        <li><a href="elemets-tabs.html">Tabs</a></li>
                                        <li><a href="elemets-accordions.html">Accordions</a></li>
                                        <li><a href="elemets-blog.html">Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="offer.html">Hot Offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive"
                                            src="{{ asset('frontend') }}/images/menu-banner/1.jpg"
                                            alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product 360</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                        <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product vodeo</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                        <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product gallery</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                        <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-360-full-width.html">360 full width</a></li>
                                <li><a href="product-video-full-width.html">Video full width</a></li>
                                <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Others</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="track-order.html">Track Order</a></li>
                                <li><a href="terms-condition.html">Terms Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                            class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                            class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                            class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                            class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- Ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend') }}/images/product-image/93_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Mens Winter Leathers
                                Jackets</a>
                            <span class="cart-price"><span>$49.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend') }}/images/product-image/96_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes -
                                White</a>
                            <span class="cart-price"><span>$150.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('frontend') }}/images/product-image/111_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                            <span class="cart-price"><span>$950.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekka Cart End -->



    @yield('content')


    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Popular Categories</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Fashion</a></li>
                                        <li class="ec-footer-link"><a href="#">Electronic</a></li>
                                        <li class="ec-footer-link"><a href="#">Cosmetic</a></li>
                                        <li class="ec-footer-link"><a href="#">Health</a></li>
                                        <li class="ec-footer-link"><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Products</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Our Company</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Legal Notice</a>
                                        </li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms and
                                                conditions</a></li>
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                        <li class="ec-footer-link"><a href="checkout.html">Secure payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                            <div class="ec-footer-contact">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading">Contact</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link ec-foo-location"><span><i
                                                        class="fi fi-rr-marker"></i></span>
                                                <p>{{ $general_info->address }}</p>
                                            </li>
                                            <li class="ec-footer-link ec-foo-call"><span><i
                                                        class="fi-rr-phone-call"></i></span><a
                                                    href="tel:{{ $general_info->phone }}">{{ $general_info->phone }}</a>
                                            </li>
                                            <li class="ec-footer-link ec-foo-mail"><span><i
                                                        class="fi fi-rr-envelope"></i></span><a
                                                    href="mailto:{{ $general_info->email }}">{{ $general_info->email }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if ($general_info->facebook || $general_info->twitter || $general_info->instagram || $general_info->youtube || $general_info->linkedin)
                            <div class="ec-footer-social">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            @if ($general_info->facebook)
                                                <li class="ec-footer-link">
                                                    <a href="{{ $general_info->facebook }}" target="_blank"><i class="ecicon eci-facebook-square"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                            @if ($general_info->instagram)
                                                <li class="ec-footer-link">
                                                    <a href="{{ $general_info->instagram }}" target="_blank"><i class="ecicon eci-instagram"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                            @if ($general_info->twitter)
                                                <li class="ec-footer-link">
                                                    <a href="{{ $general_info->twitter }}" target="_blank"><i class="ecicon eci-twitter-square"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                            @if ($general_info->linkedin)
                                                <li class="ec-footer-link">
                                                    <a href="{{ $general_info->linkedin }}" target="_blank"><i class="ecicon eci-linkedin-square"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                            @if ($general_info->youtube)
                                                <li class="ec-footer-link">
                                                    <a href="{{ $general_info->youtube }}" target="_blank"><i class="ecicon eci-youtube"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © <span id="copyright_year"></span>
                                    <a class="site-name fw-bold text-warning"
                                        href="{{ route('index') }}">{{ config('app.name') }}</a> all
                                    rights reserved. Powered by <a href="https://devhunter.dev"
                                        class="text-warning fw-bold">Dev Hunter </a>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="{{ asset('frontend') }}/images/whatsapp/profile_01.jpg" alt="profile image" />
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button-->
        <div class="cc-button cc-right-bottom">
            <i class="fi-rr-phone-call"></i>
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->


    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-basket"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{ route('index') }}" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                            class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    {{-- <div class="recent-purchase">
        <img src="{{ asset('frontend') }}/images/product-image/111_1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>Rose Gold Earrings</h6>
            <p>2 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div> --}}
    <!-- Recent Purchase Popup end -->

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->

    <script src="{{ asset('frontend') }}/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/countdownTimer.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/nouislider.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/scrollup.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/infiniteslidev2.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/click-to-call.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('frontend') }}/js/vendor/index.js"></script>
    <script src="{{ asset('frontend') }}/js/demo-8.js"></script>
</body>
