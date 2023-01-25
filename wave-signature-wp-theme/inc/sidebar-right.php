<div class="sidebar-right">
    <div class="block blog-info">
        <?php $post = get_page(11); ?>
        <?php $header_logo = get_field( 'header_logo' ); ?>
        <?php if ( $header_logo ) : ?>
            <img src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
        <?php endif; ?>
        <?php the_field( 'blog_introduction' ); ?>
        <div class="social">
            <ul>
                <li>
                    <a href="<?php the_field( 'facebook_url' ); ?>" target="balnk">
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
    <div class="block topics">
        <h3>
            Explore Topics
        </h3>
        <div class="list">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'side-menu',
                ));
            ?>
        </div>
    </div>
    <div class="block sign-up">
        <h3>
            newsletter
        </h3>
        <?php echo do_shortcode( ' [contact-form-7 id="10" title="Subscribe Form"] ' );?>
    </div>
    <div class="block banner-advertising">
        <?php $post = get_page(11); ?>
        <a href="<?php the_field( 'banner_ads_sidebar_url' ); ?>">
            <?php $banner_ads_sidebar = get_field( 'banner_ads_sidebar' ); ?>
            <?php if ( $banner_ads_sidebar ) : ?>
                <img src="<?php echo esc_url( $banner_ads_sidebar['url'] ); ?>" alt="<?php echo esc_attr( $banner_ads_sidebar['alt'] ); ?>" />
            <?php endif; ?>
        </a>
    </div>
    <div class="block disclaimer">
        <h3>
        disclaimer
        </h3>
        <?php the_field( 'disclaimer' ); ?>
        <?php if ( have_rows( 'disclaimer_group_1' ) ) : ?>
            <?php while ( have_rows( 'disclaimer_group_1' ) ) : the_row(); ?>
                <div class="btn-wrapper">
                    <?php $disclaimer_url_1 = get_sub_field( 'disclaimer_url_1' ); ?>
                    <?php if ( $disclaimer_url_1 ) : ?>
                        <a class="btn btn-custom" href="<?php echo esc_url( $disclaimer_url_1['url'] ); ?>" target="<?php echo esc_attr( $disclaimer_url_1['target'] ); ?>"><?php echo esc_html( $disclaimer_url_1['title'] ); ?></a>
                    <?php endif; ?>

                    <?php $disclaimer_url_2 = get_sub_field( 'disclaimer_url_2' ); ?>
                    <?php if ( $disclaimer_url_2 ) : ?>
                        <a class="btn btn-custom" href="<?php echo esc_url( $disclaimer_url_2['url'] ); ?>" target="<?php echo esc_attr( $disclaimer_url_2['target'] ); ?>"><?php echo esc_html( $disclaimer_url_2['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>