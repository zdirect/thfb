<?php 
/*
Template Name: story
*/
get_header(); ?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="story-back">
        <div class="story-top" style="background: url('<?php echo get_field('first_wrap_story')['background']['sizes']['background-image']?>')no-repeat center;">
            <h1><?php echo get_field('first_wrap_story')['title']?></h1>
        </div>
        <div class="story-main">
            <div class="container">
                <h2><?php echo get_field('title')?></h2>
                <div class="bord-style"></div>
                <div class="story-nav">
                    <?php foreach( get_field('story_content') as $item ):?>
                        <div>
                            <div class="story-nav-item">
                                <?php echo $item['year']?>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
                <div class="story-for">
                    <?php foreach( get_field('story_content') as $item ):?>
                        <div>
                            <div class="story-for-item">
                                <div class="story-for-item-other">
                                    <?php foreach( $item['content'] as $value ):?>
                                        <div class="story-for-blo">
                                            <div class="story-for-item-img">
                                                <img src="<?php echo $value['image']['sizes']['story-ico']?>" alt="<?php echo $value['image']['alt']?>">
                                            </div>
                                            <div class="story-for-item-txt">
                                                <h4><?php echo $value['title']?></h4>
                                                <p><?php echo $value['text']?></p>
                                            </div>
                                        </div>
                                    <?php endforeach?>    
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<?php get_footer();