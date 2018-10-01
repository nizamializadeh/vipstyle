@include('frontend.includes.header')
<body class="home page-template page-template-template-fullsize-wo-title page-template-template-fullsize-wo-title-php page page-id-127 m-has-style-switcher wpb-js-composer js-comp-ver-5.0.1 vc_responsive">
<header id="header"
        style="background-image: url( wp-content/uploads/sites/2/2017/01/header_bg.jpg);" 		class=" m-has-header-panel">
    <div class="header-bg">
        <div class="header-inner">

            <!-- HEADER BRANDING : begin -->
            <div class="header-branding">
                <a href="http://wpdemos.lsvr.sk/beautyspot">
                    <img src="{{asset('assets/img/logo.png')}}"
                         data-hires="http://wpdemos.lsvr.sk/beautyspot/wp-content/uploads/sites/2/2017/01/logo.2x.png"						width="291"
                         alt="BeautySpot">
                </a>
            </div>
            <!-- HEADER BRANDING : end -->

            <!-- HEADER NAVIGATION : begin -->
            <div class="header-navigation">

                <!-- HEADER MENU : begin -->
                <nav class="header-menu">

                    <button class="header-menu-toggle" type="button"><i class="fa fa-bars"></i>MENU</button>

                    <ul id="menu-header-items" class="main-menu menu-items clearfix"><li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><span><a href="index.html">Home</a></span></li>
                        <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><span><a href="services/index.html">Pages</a></span>
                            <ul class="sub-menu">
                                <li id="menu-item-154" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="services/index.html">Services</a></span></li>
                                <li id="menu-item-157" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="about-us/index.html">About Us</a></span></li>
                                <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="gallery/index.html">Gallery</a></span></li>
                                <li id="menu-item-156" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="elements/index.html">Elements</a></span></li>
                                <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="typography/index.html">Typography</a></span></li>
                            </ul>
                        </li>
                        <li id="menu-item-159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><span><a href="blog/index.html">Blog</a></span>
                            <ul class="sub-menu">
                                <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-post"><span><a href="image-post/index.html">Image Post</a></span></li>
                                <li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-post"><span><a href="video-post/index.html">Video Post</a></span></li>
                                <li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-post"><span><a href="audio-post/index.html">Audio Post</a></span></li>
                                <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-post"><span><a href="quote-post/index.html">Quote Post</a></span></li>
                                <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-post"><span><a href="standard-post/index.html">Standard Post</a></span></li>
                            </ul>
                        </li>
                        <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="shop/index.html">Shop</a></span></li>
                        <li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="contact/index.html">Contact</a></span></li>
                    </ul>
                </nav>
                <!-- HEADER MENU : end -->

                <!-- HEADER CART : begin -->
                <div class="header-cart">
                    <div class="header-cart-inner">
                        <a href="cart/index.html"><i class="cart-ico fa fa-shopping-cart"></i>
                            <span class="cart-label">Cart</span>
                            <span class="cart-count">(0 items)</span></a>
                    </div>
                </div>
                <!-- HEADER CART : end -->

                <!-- HEADER SEARCH : begin -->
                <div class="header-search">
                    <div class="header-search-inner">
                        <form class="search-form" action="http://wpdemos.lsvr.sk/beautyspot/" method="get">
                            <i class="search-ico fa fa-search"></i>
                            <input class="search-input" type="text" id="s" name="s" placeholder="Search for ...">
                            <button class="search-submit" type="submit"><i class="fa fa-angle-right"></i></button>
                            <button class="search-toggle" type="button">Search</button>
                        </form>
                    </div>
                    <button class="search-toggle-mobile" type="button"><i class="fa"></i></button>
                </div>
                <!-- HEADER SEARCH : end -->

            </div>
            <!-- HEADER NAVIGATION : end -->

            <!-- HEADER PANEL : begin -->
            <div class="header-panel m-has-reservation-btn">

                <button class="header-panel-toggle" type="button"><i class="fa"></i></button>

                <!-- HEADER RESERVATION : begin -->
                <div class="header-reservation">
                    <a href="#reservation-form" class="c-button">Make An Appointment</a>
                </div>
                <!-- HEADER RESERVATION : end -->

                <!-- HEADER CONTACT : begin -->
                <div class="header-contact">
                    <ul>

                        <li>
                            <div class="item-inner">
                                <i class="ico fa fa-phone"></i>
                                <p><strong>321 654 987</strong></p>
                            </div>
                        </li>

                        <li>
                            <div class="item-inner">
                                <i class="ico fa fa-envelope-o"></i>
                                <p><a href="#">hello@beautyspot.com</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="item-inner">
                                <i class="ico fa fa-map-marker"></i>
                                <p><strong>BEAUTYSPOT</strong><br />
                                    9015 Sunset Boulevard<br />
                                    Ca 90069</p>
                            </div>
                        </li>

                        <li>
                            <div class="item-inner">
                                <i class="ico fa fa-clock-o"></i>
                                <dl>
                                    <dt>Mo. - Fr.:</dt>
                                    <dd>10:00 - 16:00</dd>
                                    <dt>Sa.:</dt>
                                    <dd>10:00 - 14:00</dd>
                                    <dt>Su.:</dt>
                                    <dd>Closed</dd>
                                </dl>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- HEADER CONTACT : end -->

                <!-- HEADER SOCIAL : begin -->
                <div class="header-social">
                    <ul>


                        <li><a href="#facebook">
                                <i class="soc-facebook"></i>
                            </a></li>



                        <li><a href="#twitter">
                                <i class="soc-twitter-bird"></i>
                            </a></li>



                        <li><a href="#yelp">
                                <i class="fa fa-yelp"></i>
                            </a></li>



                        <li><a href="#vk">
                                <i class="fa fa-vk"></i>
                            </a></li>



                        <li><a href="mailto:#email">
                                <i class="fa fa-envelope-o"></i>
                            </a></li>

                    </ul>
                </div>
                <!-- HEADER SOCIAL : end -->

            </div>
            <!-- HEADER PANEL : end -->

        </div>
    </div>
</header>
@yield('content')
</body>
