<?php 
/*
Template Name: home page
*/
get_header();
?>

<div class="header-slider">
    <div class="home-slider">
        <?php foreach( get_field('slider')['content'] as $value ):?>
            <div>
                <div class="home-slider-item">
                    <h3><?php echo $value['title']?></h3>
                    <div class="home-slider-item-img">
                        <img src="<?php echo $value['images']['sizes']['slider-main']?>" alt="">
                    </div>
                </div>
            </div>
        <?php endforeach?>
    </div>
</div>

<div class="back-home" id="home-txt">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="container">
        <div class="home-txt-other">
            <?php foreach( get_field('second')['content'] as $key=>$value ):?>
                <div class="home-txt-item">
                    <?php if( $key==1 ):?>
                        <div class="home-txt-img">
                            <img src="<?php echo $value['image']['sizes']['second-image']?>" alt="<?php echo $value['image']['alt']?>">
                        </div>
                    <?php endif?>
                    <div class="home-txt-text">
                        <h4><?php echo $value['title']?></h4>
                        <p><?php echo $value['text']?></p>
                    </div>
                    <?php if( $key==0 ):?>
                        <div class="home-txt-img">
                            <img src="<?php echo $value['image']['sizes']['second-image']?>" alt="<?php echo $value['image']['alt']?>">
                        </div>
                    <?php endif?>
                </div>
            <?php endforeach?>
        </div>
        <div id="our-product-home">
            <h2><?php echo get_field('our_pro')['title']?></h2>
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
                                    <?php foreach( get_terms( [ 'taxonomy' => 'category', 'parent' => $item->term_taxonomy_id ] ) as $item ): ?>
                                        <a href="<?php echo get_term_link( $item )?>"> <?php echo $item->name ?></a>
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
                <?php foreach( get_field('news')['content'] as $value ):?>
                    <div>
                        <div class="news-home-item">
                            <div class="news-home-item-img">
                                <img src="<?php echo $value['image']['sizes']['news-image']?>" alt="<?php echo $value['image']['alt']?>">
                            </div>
                            <div class="news-home-item-txt">
                                <h4><?php echo $value['title']?></h4>
                                <p><?php echo $value['text']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<div id="slider-home">
    <div class="slider-home-slider">
        <?php foreach( get_field('gallery_home') as $value ):?>
            <div class="slider-home-img">
                <?php echo wp_get_attachment_image( $value['id'], 'gall-image' ); ?>
            </div>
        <?php endforeach?>
    </div>
</div>

<?php
get_footer();