<?php 
/*
Template Name: partners
*/
get_header(); ?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="partners-back">
        <div class="partners-top" style="background: url('<?php echo get_field('one_wrap_partner')['background']['sizes']['background-image']?>')no-repeat center;">
            <h1><?php echo get_field('one_wrap_partner')['title']?></h1>
        </div>
        <div class="partners-main">
            <div class="container">
                <div class="partners-main-top">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="partners-main-top-txt">
                                <h3><?php echo get_field('two_wrap_partner')['title']?></h3>
                                <?php echo get_field('two_wrap_partner')['text']?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="partners-main-top-img">
                                <img src="<?php echo get_field('two_wrap_partner')['image']['sizes']['partners-image']?>" alt="<?php echo get_field('two_wrap_partner')['image']['alt']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partners-other">
                    <h2><?php echo get_field('advantages')['title']?></h2>
                    <div class="partners-list">
                        <?php foreach( get_field('advantages')['content'] as $key=>$item ): ?>
                            <div class="partners-item">
                                <div class="partners-item-txt">
                                    <h3><?php echo $item['title']?></h3>
                                    <p><?php echo $item['text']?></p>
                                </div>
                                <div class="partners-item-img">
                                    <img src="<?php echo $item['image']['sizes']['advantages-image']?>" alt="">
                                </div>
                                <div class="partners-item-numb">
                                    <?php echo intval( $key+1 )?>.
                                </div>
                            </div>
                        <?php endforeach?>
                    </div>
                </div>
                <div class="our-partners">
                    <h2><?php echo get_field('our_partners')['title']?></h2>
                    <div class="our-partners-other">
                        <?php foreach( get_field('our_partners')['gallery'] as $key=>$item ): ?>
                            <div class="our-partners-item">
                                <?php echo wp_get_attachment_image( $item['id'], 'partners-logo' ); ?>
                            </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<?php get_footer();