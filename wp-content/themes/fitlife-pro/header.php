<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a href="#main-content" class="skip-link">Skip to Content</a>

<header>
<nav>
    <?php wp_nav_menu(['theme_location' => 'primary']   ); ?>
</nav>
</header>