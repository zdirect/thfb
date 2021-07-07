<?php 
get_header()?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-item">
                <a href="">HOME</a>
                <span>PRODUCTS</span>
            </div>
        </div>
    </div>
    <section id="our-products">
        <div class="container">
            <h2>PRODUCTS</h2>
            <div class="our-products-other">
                <?php foreach( get_terms( [ 'taxonomy' => 'category', 'parent' => 0, 'exclude' => '1' ] ) as $key=>$item ): ?>
                    <div class="our-products-it">
                        <div class="row">
                            <div class="col-md-6 p0">
                                <div class="our-products-it-img">
                                    <img src="<?php echo get_field('image_tax', 'category_'.$item->term_id )['sizes']['archive-image']?>" alt="">
                                </div>	
                            </div>
                            <div class="col-md-6">
                                <div class="our-products-it-txt">
                                    <h4><?php echo $item->name ?></h4>
                                    <?php echo term_description( $item )?>
                                    <a href="<?php echo get_term_link( $item )?>">View all products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>	
    </section>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>


<?php
get_footer();