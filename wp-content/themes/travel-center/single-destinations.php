<?php header()?>


<?php get_template_part('template-parts/md','header')?>

<body class="">

<?php  get_template_part('template-parts/md','nav')?>





<!--Mask-->
<div class="view hm-black-light" style="background-image: url('<?php the_post_thumbnail_url('full')?>') !important;">
    <div class="full-bg-img flex-center"">
    <ul class="animated fadeInUp">
        <li>
            <h1 class="h1-responsive"><?php the_title()?></h1></li>
        <li>
            <p><?php echo get_field('short_description_dest')?></p>
        </li>
    </ul>
</div>
</div>
<!--/.Mask-->




<section class="d-flex p-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pb-4">
                <h3 class="h3-responsive"><?php echo get_field('headline_description_dest')?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <p>Валюта:
                    <?php $currency = get_field('currency_dest');
                    foreach ($currency as $c):
                        ?>
                        <span class="badge badge-default"><i class="fa fa-<?php echo $c?>"></i> <?php echo $c?></span>
                    <?php endforeach;?>


                </p>
            </div>

            <div class="col-xs-4 col-md-1">
                <p>Аэропорт:</p>
            </div>
            <div class="col-xs-8 col-md-3">
                <p>
                    <?php $airports = get_field('airports_dest');
                    foreach ($airports as $a):
                        ?>
                        <span class="badge badge-default"><i class="fa fa-plane"></i> <?php echo $a->post_title?> (<?php echo get_field('airport_code', $a->ID)?>)</span>
                    <?php endforeach;?>


                </p>
            </div>

            <div class="col-md-1">
                <p>Язык:</p>
            </div>
            <div class="col-md-3">
                <p>
                    <?php $languages = get_field('language_dest');
                    foreach ($languages as $l):
                        ?>
                        <span class="badge badge-default"><?php echo $l?></span>
                    <?php endforeach;?>


                </p>
            </div>





        </div>
    </div>
</section>


<section class="d=flex pt-5 pb-1 elegant-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <?php
                        $id = get_field('promo_hotel_dest_1')[0]->ID;
                        ?>
                        <img src="<?php echo get_the_post_thumbnail_url($id,'full')?>" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><?php echo get_field('promo_hotel_dest_1')[0]->post_title?></h4>
                        <!--Text-->


                        <p class="card-text"><?php echo get_field('promo_hotel_dest_1')[0]->post_content;?></p>
                        <a href="#" class="btn btn-elegant">Узнать Больше <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>
</section>

<!--Card-->
<section class="pb-2 elegant-color">
    <div class="container">
        <div class="row">


            <?php
            $features = get_field('hotel_1_feature_1');
            foreach ($features as $f):
            ?>
                <div class="col-xs-12 col-md-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <img class="img-fluid overlay hm-white-slight" src="<?php echo get_the_post_thumbnail_url($f, 'full')?>" alt="Card image cap">
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title"><?php echo get_the_title($f)?></h4>
                            <!--Text-->
                            <p class="card-text"><?php echo get_post($f)->post_content?></p>
                            <?php
                            $post_type = get_post_type($f);
                            if ($post_type == 'restaurant'):?>
                            <a href="<?php echo get_field('restaurant_cta_link', $f)?>" class="btn btn-elegant"><?php echo get_field('restaurant_cta_text',$f)?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <?php elseif ($post_type == 'spa'):?>
                            <a href="<?php echo get_field('spa_cta_url', $f)?>" class="btn btn-elegant"><?php echo get_field('spa_cta_text',$f)?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <?php endif;?>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->



                </div>
            <?php endforeach;?>
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