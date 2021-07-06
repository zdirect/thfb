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
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH ?>/styles/app.css">

    <?php wp_head(); ?>
</head>
<body>
<?php dynamic_sidebar('header'); ?>

