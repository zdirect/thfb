<?php 
/*
Template Name: home page
*/
get_header();
?>

<div class="header-slider">
    <div class="home-slider">
        <div>
            <div class="home-slider-item">
                <h3>Traditional 
                    - Fresh - Delicious</h3>
                <div class="home-slider-item-img">
                    <img src="<?php echo TEMPLATE_PATH ?>/images/slide1.jpeg" alt="">
                </div>
            </div>
        </div>
        <div>
            <div class="home-slider-item">
                <h3>Traditional <br>
                    - Fresh - Delicious</h3>
                <div class="home-slider-item-img">
                    <img src="<?php echo TEMPLATE_PATH ?>/images/slide1.jpeg" alt="">
                </div>
            </div>
        </div>
        <div>
            <div class="home-slider-item">
                <h3>Traditional <br>
                    - Fresh - Delicious</h3>
                <div class="home-slider-item-img">
                    <img src="<?php echo TEMPLATE_PATH ?>/images/slide1.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="back-home" id="home-txt">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="container">
        <div class="home-txt-other">
            <div class="home-txt-item">
                <div class="home-txt-text">
                    <h4>LITHUANIAN BREADS</h4>
                    <p>When you choose our bread amongst all options available out there, we know that this is because
                        you value the freshness,
                        quality and whole
                        someness of what you put on the
                        table. And you
                        deserve to have the best! We will make sure that this happens and we will take care of all
                        necessary steps!</p>
                </div>
                <div class="home-txt-img">
                    <img src="<?php echo TEMPLATE_PATH ?>/images/img1.jpeg" alt="">
                </div>
            </div>
            <div class="home-txt-item">
                <div class="home-txt-img">
                    <img src="<?php echo TEMPLATE_PATH ?>/images/img2.jpeg" alt="">
                </div>
                <div class="home-txt-text">
                    <h4>LITHUANIAN BREADS</h4>
                    <p>Once acknowledged and loved for our craft bread making artistry, we keep
                        on a journey of
                        learning and innovation, so we can share
                        with you the best we have
                        -
                        a scrumptious
                        loaf of
                        fresh
                        bread that gives sense of stability in tomorrow's day, adds reliance to your business, draws all of
                        us back towards family traditions</p>
                </div>
            </div>
        </div>
        <div id="our-product-home">
            <h2>Our PRODUCTS</h2>
            <div class="our-product-other">
                <?php foreach( get_terms( [ 'taxonomy' => 'category', 'parent' => 0, 'exclude' => '1' ] ) as $key=>$item ): ?>
                    <div class="our-product-item">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="our-product-item-img">
                                    <h4><?php echo $item->name ?></h4>
                                    <img src="<?php echo get_field('image_tax', 'category_'.$item->term_id )['sizes']['taxonomy-image-home']?>" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="our-product-item-txt">
                                <?php
                                    global $post;
                                    $myposts = get_posts([ 
                                        'post_type' => 'products',
                                        'tax_query' => array(
                                            array(
                                              'taxonomy' => 'category',
                                              'field' => 'slug',
                                              'terms' => $item->slug,
                                            )
                                        ),
                                    ]);
                                    if( $myposts ){
                                        foreach( $myposts as $post ){
                                            setup_postdata( $post );
                                            ?><a href="<?php echo get_permalink()?>"><?php echo the_title()?></a><?php 
                                        }
                                    }
                                    wp_reset_postdata();
                                    ?>
                                    <?php foreach( get_terms( [ 'taxonomy' => 'category', 'parent' => $item->term_taxonomy_id ] ) as $item ): ?>
                                        <a href="/products/test/"><?php echo $item->name ?></a>
                                    <?php endforeach ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div id="news-home">
            <h2>NEWS & EVENTS</h2>
            <div class="news-home-slider">
                <div>
                    <div class="news-home-item">
                        <div class="news-home-item-img">
                            <img src="<?php echo TEMPLATE_PATH ?>/images/n1.jpeg" alt="">
                        </div>
                        <div class="news-home-item-txt">
                            <h4>Our Latest News</h4>
                            <p>What is your sanctuary, your safe harbour and power bank? Our recent edition of Village Bread has become a vortex of energy for us and many other...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="news-home-item">
                        <div class="news-home-item-img">
                            <img src="<?php echo TEMPLATE_PATH ?>/images/n2.jpeg" alt="">
                        </div>
                        <div class="news-home-item-txt">
                            <h4>The Happy Family Bakery <br> on Facebook</h4>
                            <p>What is your sanctuary, your safe harbour and power bank? Our recent edition of Village Bread has become a vortex of energy for us and many other...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="news-home-item">
                        <div class="news-home-item-img">
                            <img src="<?php echo TEMPLATE_PATH ?>/images/n3.jpeg" alt="">
                        </div>
                        <div class="news-home-item-txt">
                            <h4>What’s New in the World of Bread</h4>
                            <p>What is your sanctuary, your safe harbour and power bank? Our recent edition of Village Bread has become a vortex of energy for us and many other...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="news-home-item">
                        <div class="news-home-item-img">
                            <img src="<?php echo TEMPLATE_PATH ?>/images/n1.jpeg" alt="">
                        </div>
                        <div class="news-home-item-txt">
                            <h4>Our Latest News</h4>
                            <p>What is your sanctuary, your safe harbour and power bank? Our recent edition of Village Bread has become a vortex of energy for us and many other...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<div id="slider-home">
    <div class="slider-home-slider">
        <div class="slider-home-img">
            <img src="<?php echo TEMPLATE_PATH ?>/images/sl1.jpeg" alt="">
        </div>
        <div class="slider-home-img">
            <img src="<?php echo TEMPLATE_PATH ?>/images/sl2.jpeg" alt="">
        </div>
        <div class="slider-home-img">
            <img src="<?php echo TEMPLATE_PATH ?>/images/sl1.jpeg" alt="">
        </div>
        <div class="slider-home-img">
            <img src="<?php echo TEMPLATE_PATH ?>/images/sl2.jpeg" alt="">
        </div>
        <div class="slider-home-img">
            <img src="<?php echo TEMPLATE_PATH ?>/images/sl1.jpeg" alt="">
        </div>
    </div>
</div>

<?php
get_footer();