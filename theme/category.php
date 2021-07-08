<?php 
get_header()?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <?php (new breadcrumbs())->render()?>
        </div>
    </div>
    <section id="tax-other">
        <div class="container">
            <div class="tax-top">
                <h3><?php single_term_title()?></h3>
                <?php echo term_description()?>
                <?php 
                $queried_object = get_queried_object();
                $term_id = $queried_object->term_id;
                ?>
            </div>

            <div class="our-products-other">
                <?php foreach( get_terms( [ 'taxonomy' => 'category', 'parent' => $term_id ] ) as $item ): ?>
                    <div class="our-products-it">
                        <div class="row">
                            <div class="col-md-6 p0">
                                <div class="our-products-it-img">
                                    <img src="<?php echo get_field('image_tax', 'category_'.$item->term_id )['sizes']['single-image-gallery']?>" alt="">
                                </div>	
                            </div>
                            <div class="col-md-6">
                                <div class="our-products-it-txt">
                                    <h4><?php echo $item->name ?></h4>
                                    <?php echo get_term_field( 'description', $item, );?>
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
        <img src="<?php echo TEMPLATE_PATH?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<?php get_footer();