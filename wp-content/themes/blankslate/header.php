<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-main-menu">
            <div class="container">
                <a class="logo-box" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
                    <div class="logo" style="background-image:url('<?php the_field('main_logo'); ?>')"></div>
                </a>
                <div class="main-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    <div class="search"></div>
                </div>
            </div>
        </div>
        <div class="header-secondary-menu">
            <div class="container">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
            </div>
        </div>
    </header>