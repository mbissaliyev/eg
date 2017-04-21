<?php header()?>


<?php get_template_part('template-parts/md','header')?>

<body class="">

<?php  get_template_part('template-parts/md','nav')?>


<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->


    <?php
    $args = array(
        'post_type' => 'front_page_banner',
        'orderby' => 'order',
        'order' => 'ASC'

    );

    $q = new WP_Query($args);
    while ($q->have_posts()): $q->the_post();

    ?>

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item <?php if (get_field('order') == 1) : echo 'active';endif;?> view hm-stylish-light" style="background-image: url('<?php echo get_field('promo_banner')?>'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <p class="flex-item"><?php echo get_field( "promo_caption" );?></p>
                    </li>
                    <li>
                        <h1 class="h1-responsive flex-item"><?php the_title()?></h1>
                    </li>
                    <li>
                        <p class="flex-item"><?php echo get_field('bottom_subtitle');?></p>
                    </li>
                    <li>
                        <a target="" href="<?php echo get_field('cta_url')?>" class="btn btn-lime btn-lg flex-item" rel="nofollow"><?php echo get_field('promo_cta')?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.First slide -->
        <?php endwhile;?>

    </div>
    <!--/.Slides-->



    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->





<!--Section: Features v.1-->

<section class="d-flex mt-2 mb-2">
    <div class="container ">
        <!--Section heading-->
        <div class="col-12">
        <h1 class="h1-responsive text-center" style="color:#212121">Executive Guest | by Travel Center</h1>
        <!--Section sescription-->
        </div>
        <div class="col-12">
            <h3 class="h3-responsive">Для Вас мы отобрали только самых лучших поставщиков индустрий, чтобы Ваш отдых был незабываемым!</h3>
        </div>
    </div>

</section>

<!--/Section: Features v.1-->







<?php
$args = array(
    'post_type' => 'front_page_banner_xl',
    'posts_per_page' => 1,


);

$q = new WP_Query($args);

while ($q->have_posts()): $q->the_post();


    ?>


    <!--Card-->
    <section class="pt-2 pb-2 elegant-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Card-->

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <img class="img-fluid overlay hm-white-slight" src="<?php echo get_field('xl_front_banner')['url']?>" alt="Card image cap">
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title"><?php echo get_field('xl_hotel_name')?></h4>
                                <!--Text-->
                                <p class="card-text"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <span class="badge badge-primary"><?php echo get_field('xl_city_country')?></span></p>
                                <p class="card-text"><?php echo get_field('xl_hotel_short_description')?></p>
                                <a href="<?php echo get_field('xl_cta_url')?>" class="btn btn-elegant"><?php echo get_field('xl_cta')?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                </div>
            </div>
        </div>


    </section>

<?php endwhile;?>




<!--Card-->
<section class="pt-2 pb-2 elegant-color">
    <div class="container">

        <div class="row visible-sm">
        <?php
        $args = array(
            'post_type' => 'front_page_banner_m'



        );

        $q = new WP_Query($args);

        while ($q->have_posts()): $q->the_post();


        ?>

            <div class="col-xs-12 col-md-4 col-lg-4 mt-1">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <img class="img-fluid overlay hm-white-slight" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full')?>" alt="Card image cap">
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><?php echo get_the_title(get_the_ID())?></h4>

                        <p class="card-text"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <span class="badge badge-primary"><?php echo get_field('m_city_country')?></span></p>

                        <!--Text-->
                        <p class="card-text"><?php echo get_post(get_the_ID())->post_content?></p>
                        <a href="<?php echo get_field('m_cta_url')?>" class="btn btn-elegant"><?php echo get_field('m_cta_text')?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <?php endwhile;?>
        </div>
    </div>

</section>




<?php get_template_part('template-parts/md','footer')?>



<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/md/js/jquery-2.2.3.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/md/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/md/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/md/js/mdb.min.js"></script>

<script>
    new WOW().init();

</script>

</body>

</html>