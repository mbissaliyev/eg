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

    <!-- PAGE CONTENT -->
    <div id="page-content">

        <section class="full-section parallax" id="section-9" style="height: 920px; background-image: url(http://luxurycollectiondestinations.com/wp-content/uploads/2016/05/Vienna_Hero.jpg);">

            <div class="full-section-container">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">



                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

                <br><br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="headline text-center">
                                <h2><?php the_title()?></h2>
                            </div><!-- headline -->

                            <p class="lead text-center"><?php echo get_field('short_description_dest')?></p>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">



                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->


    </div><!-- PAGE CONTENT -->

</div>

<div class="main-container">
    <div class="padding-block"></div>
</div>


<div class="container">
    <div class="city-headline-title">
        <div class="col-md-12">
            <h2 class="city-headline text-center"><?php echo get_field('title_headline_dest')?></h2>
        </div>


        <div class="col-md-12 text-center">
            <p class="city-text"><?php echo get_field('headline_description_dest')?></p>
        </div>

        <div class="row">

            <div class="col-md-4">
                <img src="#" class="weather-icon-destination" alt="">
                <span class="weather-temperature-destination"></span>
                <span class="weather-place-destination"><?php the_title()?></span>
            </div>

            <div class="col-md-4 text-left">

                <p><i class="fa fa-money" aria-hidden="true"></i> Валюта:



                    <?php foreach (get_field('currency_dest') as $c):?>
                        <i class="fa fa-<?php echo $c?>" style="display: inline"></i> <?php echo $c;?>

                    <?php endforeach;?>
                </p>
            </div>

            <div class="col-md-4 text-left">

                <p>
                    <i class="fa fa-comments-o" aria-hidden="true"></i> Язык:


                    <?php
                    foreach (get_field('language_dest') as $l):?>
                        <?php echo $l;

                    endforeach;?>


                </p>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12 text-center">
                <div class="col-md-2"><i class="fa fa-plane" aria-hidden="true"></i> Аэропорт</div>
                <div class="col-md-8"><p>  <?php echo get_field('airports_dest')?></p></div>

            </div>

        </div>

    </div>
</div>


<div class="col-md-12">
    <?php
    //    var_dump(get_field('promo_hotel_dest'));
    ?>

</div>

<div class="container hotel-container pl0">

    <div class="col-md-8 pl0">
        <img class="img-hotel-container" src="http://luxurycollectiondestinations.com/wp-content/uploads/2016/05/Vienna_Hero.jpg">
        <div class="hotel-booking">
            <div class="hotel-booking-name">
                <div class="hotel-title"><?php echo get_field('promo_hotel_dest')->post_title?></div>

                <p>Дата заезда</p>
                <p>Дата выезда</p>

                <p>Кол-во взрослых</p>
                <p>Кол-во детей</p>

            </div>

            <div class="hotel-booking-cta">
                <p>ЗАБРОНИРОВАТЬ <i class="fa fa-angle-right" aria-hidden="true"></i>
                </p>
            </div>

        </div>

    </div>
    <div class="col-md-4">
        <div class="right-section">

            <?php
            $hotel_meta = get_field('hotel_1_feature_1');

            foreach ($hotel_meta as $h):
                ?>


                <h2 class="headline"><?php echo $h->post_title?></h2>



                <img src="<?php echo get_the_post_thumbnail_url($h->ID)?>" height="150px" width="90%">


                 <p><?php echo $h->post_content?></p>
                <div class="clearfix"></div>

                <a href="#">Узнать больше <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                <?php
            endforeach;
            ?>




        </div>
    </div>


</div>








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