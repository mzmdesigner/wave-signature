<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php $post = get_page(11); ?>
            <?php $header_logo = get_field( 'header_logo' ); ?>
            <?php if ( $header_logo ) : ?>
                <img src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M3 4h18v2H3V4zm6 7h12v2H9v-2zm-6 7h18v2H3v-2z"/>
                </svg>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav m-auto %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
            <div class="d-flex">
                <div class="social">
                    <?php $post = get_page(11); ?>
                    <ul>
                        <li>
                            <a href="<?php the_field( 'facebook_url' ); ?>">
                                <?php the_field( 'facebook_icon_-_svg' ); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'twitter_url' ); ?>">
                                <?php the_field( 'twitter_icon_-_svg' ); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'instagram_url' ); ?>">
                                <?php the_field( 'instagram_icon_-_svg' ); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'linkedin_url' ); ?>">
                                <?php the_field( 'linkedin_icon_-_svg' ); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'youtube_url' ); ?>">
                                <?php the_field( 'youtube_icon_-_svg' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </nav>
</header>