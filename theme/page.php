<?php get_header();?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="jobs-back">
        <div class="jobs-top">
            <h1><?php the_title()?></h1>
        </div>
        <div class="jobs-main">
            <div class="container">
                <div class="default-style">
                    <?php the_content()?>
                </div>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>


<?php get_footer()?>