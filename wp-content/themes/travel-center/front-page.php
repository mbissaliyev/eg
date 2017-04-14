<?php header();?>
<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title><?php the_title()?></title>



    <?php get_template_part('inc/load', 'styles')?>


</head>

<body>

<!-- PAGE LOADER -->


<div id="main-container">

    <!-- HEADER -->
    <header>

        <div id="header-top">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="widget widget-contact">

                            <ul>
                                <li>
                                    <i class="supreme-icon-big-map-placeholder-outlined-symbol-of-interface"></i>
                                    Казахстан, Алматы 050002 пр.Абылай хана, д.92/ 87
                                </li>
                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-4 col-md-5">

                        <div class="widget widget-contact">

                            <ul>
                                <li class="text-right">
                                    <i class="supreme-icon-phone-auricular-outline"></i>
                                    <a href="tel:+77022140694">+7 (702) 214-06-94</a>
                                </li>
                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2 col-md-1">

                        <div class="widget widget-languages">

                            <a href="#">en</a>

                            <ul>
                                <li><a href="#">en</a></li>
                                <li><a href="#">fr</a></li>
                                <li><a href="#">de</a></li>
                            </ul>

                        </div><!-- widget-twitter -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- HEADER TOP -->

        <div id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <a id="mobile-menu-button" href="#"><i class="supreme-icon-mobile-menu"></i></a>

                            <ul class="menu clearfix" id="menu-left">

                                <?php

                                $args = array(
                                    'menu' => 2,
                                    'before' => '<li>',
                                    'after' => '</li>'
                                );




                                ?>


                                <?php wp_nav_menu($args)?>


                            </ul>

                        </nav>

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index.html">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/logo-eg.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <ul class="menu clearfix" id="menu-right">
                               
                                <li><a href="offers.html">VIP предложения</a></li>
                                <li><a href="contact.html">Контакты</a></li>
                                <li class="search">

                                    <a href="#"><i class="supreme-icon-search-interface-symbol"></i></a>

                                    <div id="search-form-container">

                                        <form id="search-form" action="#">
                                            <input id="search" type="search" name="search" placeholder="Enter keywords...">
                                            <input id="search-submit" type="submit" value="">
                                        </form>

                                    </div><!-- search-form-container -->

                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- HEADER -->

    </header><!-- HEADER -->


    <!-- PAGE CONTENT -->
    <div id="page-content">

        <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
                <ul>
                    <li data-transition="fade">

                        <img src="http://dev.eg.travelcenter.kz/wp-content/uploads/2017/04/bg-slide-1-1.jpg" alt="">

                        <div class="tp-caption overlay"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="700"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                        </div>

                        <div class="tp-caption title"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                            Four Seasons George V
                        </div>

                        <div class="tp-caption text"
                             data-x="center"
                             data-y="center"
                             data-voffset="85"
                             data-speed="700"
                             data-start="1700"
                             data-transform_in="y:-50;s:700;"
                             data-transform_out="y:-50;s:700;">
                            Расположенный в двух шагах от Елисейских Полей
                        </div>

                        <div class="tp-caption subtitle"
                             data-x="center"
                             data-y="center"
                             data-voffset="-100"
                             data-speed="700"
                             data-start="2200"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            новое определение роскоши
                        </div>

                        <div class="tp-caption link"
                             data-x="center"
                             data-y="center"
                             data-voffset="150"
                             data-speed="700"
                             data-start="2700"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            <a href="#">Забронировать <i class="supreme-icon-arrow-right"></i></a>
                        </div>

                    </li>
                    <li data-transition="fade">

                        <img src="images/index/revolution-slider/bg-slide-2.jpg" alt="">

                        <div class="tp-caption overlay"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="700"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                        </div>

                        <div class="tp-caption big-title"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                            Discover the World
                        </div>

                        <div class="tp-caption subtitle"
                             data-x="center"
                             data-y="center"
                             data-voffset="-100"
                             data-speed="700"
                             data-start="1700"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            You need to visit
                        </div>

                        <div class="tp-caption"
                             data-x="center"
                             data-y="center"
                             data-voffset="170"
                             data-speed="700"
                             data-start="2200"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            <a class="btn btn-white" href="#">Near by places</a>
                        </div>

                        <div class="tp-caption"
                             data-x="center"
                             data-y="center"
                             data-voffset="80"
                             data-speed="700"
                             data-start="2700"
                             data-transform_in="x:500;o:0;s:1500;"
                             data-transform_out="x:-500;o:0;s:1500;">
                            <img src="images/index/revolution-slider/slide-2-image-1.png" alt="">
                        </div>

                    </li>
                    <li data-transition="fade">

                        <img src="http://dev.eg.travelcenter.kz/wp-content/uploads/2017/04/bg-slide-3.jpg" alt="">

                        <div class="tp-caption"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="700"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                            <img src="http://dev.eg.travelcenter.kz/wp-content/uploads/2017/04/slide-3-image-1.png" alt="">
                        </div>

                        <div class="tp-caption big-title"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-transform_in="o:0;s:700;"
                             data-transform_out="o:0;s:700;">
                            Relax &amp; Enjoy
                        </div>

                        <div class="tp-caption subtitle"
                             data-x="center"
                             data-y="center"
                             data-voffset="-100"
                             data-speed="700"
                             data-start="1700"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            A holiday to remember
                        </div>

                        <div class="tp-caption"
                             data-x="center"
                             data-y="center"
                             data-voffset="135"
                             data-speed="700"
                             data-start="2200"
                             data-transform_in="y:50;s:700;"
                             data-transform_out="y:50;s:700;">
                            <a class="btn btn-white" href="#">Near by places</a>
                        </div>

                    </li>
                </ul>
            </div><!-- rev_slider -->
        </div><!-- rev_slider_wrapper -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="booking">

                        <form class="booking-form" name="booking-form" method="post" action="#">

                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="date">
                                        <input class="col-xs-12" type="text" placeholder="Check in" data-beatpicker="true" data-beatpicker-format="['MM','DD','YYYY'],separator:'/'">
                                        <i class="supreme-icon-weekly-calendar-outline-event-interface-symbol"></i>
                                    </div><!-- date -->

                                </div><!-- col -->
                                <div class="col-sm-6">

                                    <div class="date">
                                        <input class="col-xs-12" type="text" placeholder="Check out" data-beatpicker="true" data-beatpicker-format="['MM','DD','YYYY'],separator:'/'">
                                        <i class="supreme-icon-weekly-calendar-outline-event-interface-symbol"></i>
                                    </div><!-- date -->

                                </div><!-- col -->
                            </div><!-- row -->

                            <div class="row">
                                <div class="col-sm-6">

                                    <select>
                                        <option value="0">Adults</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5</option>
                                    </select>

                                </div><!-- col -->
                                <div class="col-sm-6">

                                    <select>
                                        <option value="0">Children</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5</option>
                                    </select>

                                </div><!-- col -->
                            </div><!-- row -->

                            <p class="text-center no-margin-bottom"><a class="btn btn-default" href="#">Check availability</a></p>

                        </form>

                    </div><!-- booking -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="text-center">The Supreme Hotel</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        mattis orci in imperdiet cursus. Sed rutrum tincidunt orci, eu eleifend quam lobortis ut.
                        Quisque suscipit eget quam vel tincidunt. Maecenas convallis enim eget suscipit malesuada.
                        Etiam massa mauris, dictum sit amet porttitor sit amet, tincidunt at libero. Fusce ac enim
                        id nisl accumsan dapibus non at diam. Praesent quis leo tincidunt, faucibus mi eget, auctor
                        elit. Maecenas fringilla diam sit amet velit vehicula, vel finibus libero porttitor amet
                        duis ultrices erat</p>

                </div><!-- col -->
                <div class="col-sm-6">

                    <p class="text-justify">quisque luctus tellus in tincidunt efficitur. Curabitur sed viverra
                        nisi, ut porta quam. Aliquam erat volutpat. Duis sagittis diam efficitur nibh eleifend tempus.
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque luctus tellus
                        in tincidunt efficitur. Curabitur sed viverra nisi, ut porta quam. Aliquam erat volutpat.</p>

                    <p style="margin-top: -5px;">
                        <strong>The Manager</strong>
                        <img src="images/index/image-1.png" alt="">
                    </p>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="gallery-slider-container">

            <div class="owl-carousel gallery-slider">
                <div class="item">

                    <div class="row">
                        <div class="col-lg-7">

                            <p><img src="images/gallery/gallery-slider/image-1.jpg" alt=""></p>

                        </div><!-- col -->
                        <div class="col-lg-5">

                            <div class="gallery-description">

                                <h1>Dream view by <br class="visible-lg-block"> <span class="text-default-color">the pool.</span></h1>

                                <p>Cum sociis natoque penatibus et magnis dis parturient monCum sociis natoque penatibus
                                    et magnis dis parturient montes, nascetur ridiculus mus. Quisque luctus tellus in tincidunt
                                    efficitur.</p>

                                <a class="btn btn-default" href="#">Check availability</a>

                            </div><!-- gallery-description -->

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- item -->
                <div class="item">

                    <div class="row">
                        <div class="col-lg-7">

                            <p><img src="images/gallery/gallery-slider/image-2.jpg" alt=""></p>

                        </div><!-- col -->
                        <div class="col-lg-5">

                            <div class="gallery-description">

                                <h1>Conference room.</h1>

                                <p>Duis massa est, lacinia id finibus quis, convallis quis urna. Integer hendrerit interdum
                                    lorem, quis placerat ligula sagittis nec. Sed at leo iaculis nunc facilisis consequat dolor
                                    sed amet unde omis.</p>

                                <a class="btn btn-default" href="#">Check availability</a>

                            </div><!-- gallery-description -->

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- item -->
                <div class="item">

                    <div class="row">
                        <div class="col-lg-7">

                            <p><img src="images/gallery/gallery-slider/image-3.jpg" alt=""></p>

                        </div><!-- col -->
                        <div class="col-lg-5">

                            <div class="gallery-description">

                                <h1>Luxury by the sea.</h1>

                                <p>Mauris ac tempor leo, vitae euismod enim. Duis auctor sodales diam, sed aliquet odio lobortis
                                    sit amet. Fusce vulputate quam augue, sed volutpat eros vestibulum lacinia. Duis dignissim
                                    ullamcorper.</p>

                                <a class="btn btn-default" href="#">Check availability</a>

                            </div><!-- gallery-description -->

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- item -->
            </div><!-- gallery-sliders -->

        </div><!-- gallery-slider-container -->

        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    <div class="headline">

                        <h3>About The Supreme</h3>

                    </div><!-- headline -->

                    <p><img src="images/about/image-1.jpg" alt=""></p>

                    <p>Matoque penatibus et magnis dis parturient mon. Cum sociis natoque penatibus et magnis
                        dis partu rient montes nas.</p>

                    <p>
                        <strong>The Manager</strong>
                        <img src="images/index/image-1.png" alt="">
                    </p>

                </div><!-- col -->
                <div class="col-sm-4">

                    <div class="headline">

                        <h3>Hotel Overview</h3>

                    </div><!-- headline -->

                    <ul class="bullet-list">
                        <li>125 luxury guest rooms</li>
                        <li>3* Michelin Restaurant</li>
                        <li>Infinity pool &amp; Beach Buffet</li>
                        <li>Rooftop Cocktail Bar</li>
                        <li>Traditional Cuisine</li>
                        <li>24 hour front desk</li>
                        <li>Airport pick up/drop off service</li>
                        <li>Pets Allowed</li>
                    </ul>

                </div><!-- col -->
                <div class="col-sm-4">

                    <div class="headline">

                        <h3>Find Our Location</h3>

                    </div><!-- headline -->

                    <div class="map-container">
                        <div class="map" data-zoom="13" data-height="370" data-address="Sanford, FL, USA" data-address-details="Here is our location"></div>
                        <a class="btn btn-default" href="contact.html">Get directions</a>
                    </div><!-- map-container -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <section class="full-section" id="section-1">
            <div class="full-section-container">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="owl-carousel testimonials-slider">
                                <div class="item">

                                    <div class="testimonial">

                                        <h4>Cris Smith &amp; Jannine</h4>
                                        <h6>Young Couple</h6>

                                        <blockquote>
                                            <p>Nam a dui et nunc facilisis hendrerit quis id justo. Suspendisse quis euismod
                                                ex. Integer volutpat feugiat metus, sed vulputate nunc. Etiam dapibus tortor nec
                                                dui placerat, non aliquet risus egestas. Praesent auctor urna laoreet felis
                                                sagittis ullamcorper. Aliquam quis neque in ipsum sagittis pulvinar ac ut dui.</p>
                                        </blockquote>

                                    </div><!-- testimonial -->

                                </div><!-- item -->
                                <div class="item">

                                    <div class="testimonial">

                                        <h4>Raymond Hall</h4>
                                        <h6>General Manager</h6>

                                        <blockquote>
                                            <p>Duis dui orci, luctus sodales sapien sit amet, suscipit convallis nibh. Ut vel
                                                ligula convallis, efficitur quam non, fermentum urna. Etiam enim nibh, euismod quis
                                                tellus non, rutrum scelerisque mauris. Praesent eleifend lorem enim, vel feugiat
                                                nisl congue vel. Morbi congue aliquet velit. Nunc dignissim blandit nulla, placerat.</p>
                                        </blockquote>

                                    </div><!-- testimonial -->

                                </div><!-- item -->
                                <div class="item">

                                    <div class="testimonial">

                                        <h4>Dorothy Collins</h4>
                                        <h6>Client</h6>

                                        <blockquote>
                                            <p>Etiam magna dui, varius et ornare sit amet, varius at arcu. Sed vel aliquet dolor,
                                                in iaculis ipsum. Fusce a nulla interdum, laoreet tellus eu, cursus dolor. Nulla
                                                imperdiet felis quis mauris feugiat finibus. Integer vestibulum sodales mi, ac pharetra
                                                psum ullamcorper ut. Nulla non posuere neque. Sed a pretium ex. Pellentesque non metus.</p>
                                        </blockquote>

                                    </div><!-- testimonial -->

                                </div><!-- item -->
                                <div class="item">

                                    <div class="testimonial">

                                        <h4>Roger Brown</h4>
                                        <h6>Client</h6>

                                        <blockquote>
                                            <p>Mauris lectus libero, consequat sed turpis ac, dapibus condimentum mi. Ut sollicitudin
                                                eros est, quis volutpat ex ultricies id. Quisque nunc elit, dignissim non consequat in,
                                                lacinia quis erat. Donec id felis condimentum magna sagittis convallis. Nullam efficitur
                                                sem felis, at ullamcorper lorem varius vulputate. Vivamus mollis metus dui, nec mollis.</p>
                                        </blockquote>

                                    </div><!-- testimonial -->

                                </div><!-- item -->
                            </div><!-- testimonials-slider -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->

        <section class="full-section" id="section-2">
            <div class="full-section-container">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">

                            <div class="service-box">

                                <img src="images/facilities/image-1.jpg" alt="">

                                <div class="service-box-hover">

                                    <a href="#">Enter</a>

                                </div><!-- service-box-hover -->

                                <div class="service-box-content">

                                    <h4>Indor spa</h4>
                                    <h5>Special Offer</h5>

                                    <h6>From $35</h6>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-3">

                            <div class="service-box">

                                <img src="images/facilities/image-2.jpg" alt="">

                                <div class="service-box-hover">

                                    <a href="#">Enter</a>

                                </div><!-- service-box-hover -->

                                <div class="service-box-content">

                                    <h4>VIP Suite</h4>
                                    <h5>Special Offer</h5>

                                    <h6>From $135</h6>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-3">

                            <div class="service-box">

                                <img src="images/facilities/image-3.jpg" alt="">

                                <div class="service-box-hover">

                                    <a href="#">Enter</a>

                                </div><!-- service-box-hover -->

                                <div class="service-box-content">

                                    <h4>Pool View</h4>
                                    <h5>Special Offer</h5>

                                    <h6>From $95</h6>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-3">

                            <div class="service-box">

                                <img src="images/facilities/image-4.jpg" alt="">

                                <div class="service-box-hover">

                                    <a href="#">Enter</a>

                                </div><!-- service-box-hover -->

                                <div class="service-box-content">

                                    <h4>Private Pool</h4>
                                    <h5>Special Offer</h5>

                                    <h6>From $350</h6>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->

    </div><!-- PAGE CONTENT -->


<?php get_template_part('template-parts/content', 'footer')?>


</div><!-- MAIN CONTAINER -->


<!-- SCROLL UP -->
<a id="scroll-up"><i class="supreme-icon-up-arrow-angle"></i></a>


<!-- jQUERY -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/jquery/jquery-2.2.2.min.js"></script>

<!-- PAGE LOADER -->


<!-- BOOTSTRAP JS -->
<script src="<?php  echo get_template_directory_uri()?>/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- VIEWPORT -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/viewport/jquery.viewport.js"></script>

<!-- MENU -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/menu/hoverIntent.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/menu/superfish.js"></script>

<!-- FANCYBOX -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/fancybox/jquery.fancybox.pack.js"></script>

<!-- REVOLUTION SLIDER  -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js"></script>

<!-- OWL Carousel -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- PARALLAX -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/parallax/jquery.stellar.min.js"></script>

<!-- ISOTOPE -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- PLACEHOLDER -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/placeholders/jquery.placeholder.min.js"></script>

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/validate/jquery.validate.min.js"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/submit/jquery.form.min.js"></script>

<!-- GOOGLE MAPS -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/googlemaps/gmap3.min.js"></script>

<!-- YOUTUBE PLAYER -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/ytplayer/jquery.mb.ytplayer.min.js"></script>

<!-- TWITTER -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/twitter/twitterfetcher.min.js"></script>

<!-- WEATHER -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/weather/weather.min.js"></script>

<!-- BEATPICKER -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/beatpicker/beatpicker.min.js"></script>

<!-- ANIMATIONS -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/animations/wow.min.js"></script>

<!-- COUNTDOWN -->
<script src="<?php  echo get_template_directory_uri()?>/assets/plugins/countdown/jquery.countdown.min.js"></script>

<!-- CUSTOM JS -->
<script src="<?php  echo get_template_directory_uri()?>/assets/js/custom.js"></script>

</body>

</html>