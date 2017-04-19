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



                    <?php
                    $args = array(
                        'post_type' => 'front_page_banner',
                        'orderby' => 'order',
                        'order' => 'ASC'

                    );

                    $q = new WP_Query($args);

                    while ($q->have_posts()): $q->the_post();



                        ?>

                        <li data-transition="fade">

                            <img src="<?php echo get_field('promo_banner')?>" alt="">

                            <div class="tp-caption overlay"
                                 data-x="center"
                                 data-y="center"
                                 data-speed="300"
                                 data-start="300"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                            </div>

                            <div class="tp-caption title"
                                 data-x="center"
                                 data-y="center"
                                 data-speed="300"
                                 data-start="600"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <?php the_title(); ?>
                            </div>

                            <div class="tp-caption text"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="85"
                                 data-speed="300"
                                 data-start="1000"
                                 data-transform_in="y:-50;s:700;"
                                 data-transform_out="y:-50;s:700;">
                                <?php echo get_field('bottom_subtitle');?>
                            </div>

                            <div class="tp-caption subtitle"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="-100"
                                 data-speed="300"
                                 data-start="1000"
                                 data-transform_in="y:50;s:700;"
                                 data-transform_out="y:50;s:700;">

                                <?php echo get_field( "promo_caption" );?>
                            </div>

                            <div class="tp-caption link"
                                 data-x="center"
                                 data-y="center"
                                 data-voffset="150"
                                 data-speed="300"
                                 data-start="1000"
                                 data-transform_in="y:50;s:700;"
                                 data-transform_out="y:50;s:700;">
                                <a href="<?php echo get_field('cta_url')?>"><?php echo get_field('promo_cta')?> <i class="supreme-icon-arrow-right"></i></a>
                            </div>

                        </li>


                    <?php  endwhile; ?>

                </ul>
            </div><!-- rev_slider -->
        </div><!-- rev_slider_wrapper -->
    </div>

    <div id="page-content">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="text-center">Executive Guest | by TRAVEL CENTER</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <p class="text-justify">Наша многолетняя история - это коллективная и трудоемкая работа всей нашей команды. Счастливый клиент - самый главный результат нашей работы. Мы порекомендуем Вам, в каком уголке мира лучше всего устроить пышное торжество или провести тихий семейный отпуск.</p>

                    <p class="text-justify">Мы являемся эксклюзивным партнером Traveller Made в Казахстане с 2013 года.</p>
                    <p class="text-justify">Мы являемся привилегированными партнером цепочки отелей Four Seaons в Казахстане.</p>
                </div><!-- col -->
                <div class="col-sm-6">

                    <p class="text-justify">Благодаря статусу официального агента <strong>Traveller Made</strong>, мы рады предложить нашим клиентам дополнительные преимущества при бронировании отелей, входящих в ассоциацию:
                    <ul class="bullet-list mb0">
                        <li class="mb0">Бесплатное повышение категории номера</li>
                        <li class="mb0">Бесплатные завтраки в отелях</li>
                        <li class="mb0">Ужины, обеды в ресторанах отеля, спа-процедуры в салоне отеля в подарок</li>
                        <li class="mb0">Ранний чек-ин и поздний чек-аут и другие приятные сюрпризы!</li>
                    </ul></p>

                    <p class="text-justify">Для Вас мы отобрали только самых лучшие поставщиков индустрий.</p>

                    <p style="margin-top: -5px;">
                        <strong>Команда TRAVEL CENTER</strong>
                    </p>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </div>


    <!-- PAGE CONTENT -->
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="filter text-center">
                        <li>
                            <a class="active" href="#" data-filter="*">Все</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".categ-1">Приключения</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".categ-2">Relax</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".categ-3">Вдохновения</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".categ-4">Luxury</a>
                        </li>
                    </ul>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->



        <!--            <div class="container">-->

        <?php
        $args = array(
            'post_type' => 'front_page_banner_xl',
            'posts_per_page' => 1,


        );

        $q = new WP_Query($args);

        while ($q->have_posts()): $q->the_post();


        ?>
        <div class="isotope masonry" style="margin-left: 10%; margin-right: 10%">
            <div class="isotope-item item-width-front-1 categ-1 categ-2 categ-3 categ-4">

                <div class="portfolio-item">

                    <div class="portfolio-item-thumbnail">

                        <img src="http://dev.eg.travelcenter.kz/wp-content/uploads/2017/04/1600x700.jpg" alt="">

                        <div class="portfolio-item-hover">

                            <p class="hotel-action"><?php echo get_field('xl_hotel_short_description')?></p>

                            <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="<?php echo get_field('xl_cta_url')?>"><?php echo get_field('xl_hotel_name')?></a>


                            <a class="hotel-action-cta" href="<?php echo get_field('xl_cta_url')?>"><?php echo get_field('xl_cta')?> <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>

                        </div><!-- portfolio-item-hover -->

                    </div><!-- portfolio-item-thumbnail -->

                </div><!-- portfolio-item -->

            </div><!-- isotope-item -->
            <?php endwhile;?>





            <?php
            $args = array(
                'post_type' => 'front_page_banner_m'


            );

            $q = new WP_Query($args);

            while ($q->have_posts()): $q->the_post();


                ?>
                <div class="isotope-item item-width-front-2 categ-1 categ-2">

                    <div class="portfolio-item">

                        <div class="portfolio-item-thumbnail">


                            <?php

                            if (get_field('m_logo_of_the_hotel')):?>
                                <div class="logo-container">
                                    <img class="img-logo-container" src="<?php echo get_field('m_logo_of_the_hotel')['url']?>" alt="">
                                </div>
                            <?php endif;?>
                            <img src="<?php echo get_field('m_banner_image')['url']?>" alt="">

                            <div class="portfolio-item-hover">

                                <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="<?php echo get_field('m_cta_url')?>"><?php echo get_field('m_hotel_name')?> </a>


                                <a class="hotel-action-cta-m" href="<?php echo get_field('m_cta_url')?>"><?php echo get_field('m_cta_text')?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                            </div><!-- portfolio-item-hover -->

                        </div><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                </div><!-- isotope-item -->

            <?php endwhile;?>




            <?php
            $args = array(
                'post_type' => 'front_page_banner_s'


            );

            $q = new WP_Query($args);

            while ($q->have_posts()): $q->the_post();


                ?>
                <div class="isotope-item item-width-front-3 categ-1 categ-2">

                    <div class="portfolio-item">

                        <div class="portfolio-item-thumbnail">



                            <img src="<?php echo get_field('s_banner_image')['url']?>" alt="">

                            <div class="portfolio-item-hover">

                                <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="<?php echo get_field('cta_url_s')?>"><?php echo get_field('hotel_name_s')?></a>


                                <a class="hotel-action-cta" href="<?php echo get_field('cta_url_s')?>"><?php echo get_field('cta_text_s')?> <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>

                            </div><!-- portfolio-item-hover -->

                        </div><!-- portfolio-item-thumbnail -->

                    </div><!-- portfolio-item -->

                </div><!-- isotope-item -->



            <?php endwhile;?>




        </div><!-- isotope -->

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <p class="text-center"><a class="btn btn-default load-more" href="more-projects-5.html">Load more</a></p>

            </div><!-- col -->
        </div><!-- row -->

        <!--            </div><!-- container -->

    </div><!-- PAGE CONTENT -->










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