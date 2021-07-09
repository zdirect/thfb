<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php wp_title(); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="width" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo TEMPLATE_PATH ?>/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/fonts/fonts.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/slick.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/slick-theme.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/animate.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/menu-style.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/css/media.css" />
    <?php wp_head(); ?>
</head>
<body id="main" class="<?php echo (is_front_page() || is_page_template('page-jobs.php') || is_page_template('page-story.php') || is_page_template( 'page-partners.php' ) ) ? 'home-style': ''?>">
<div class="height-style">
    <header id="menu" class="default-menu">
        <div class="container pos-r">
            <div class="logo">
                <a href="<?php echo home_url()?>">
                    <img src="<?php echo get_field('header_group', 'option')['logo']['url']?>" alt="">
                </a>
            </div>
            <div class="navig-header">
                <div class="colapse-menu-button">
                    <button class="c-hamburger c-hamburger--htx">
                        <span></span>
                    </button>
                </div>
                <div class="navig-header-back">
                    <?php wp_nav_menu( 'top' ); ?>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="down-ico">
    <a href="<?php echo get_field('download_price', 'option')['link']?>" target="_blank">
        <img src="<?php echo TEMPLATE_PATH ?>/images/down-ico.svg" alt="">
    </a>
</div>

<div id="cover"></div>

