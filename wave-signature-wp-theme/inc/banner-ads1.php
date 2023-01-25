<?php $post = get_page(11); ?>
<div class="banner-content-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 offset-xl-3 offset-lg-2">
                <a href="<?php the_field( 'banner_ads_top_url' ); ?>">
                    <?php $banner_ads_top = get_field( 'banner_ads_top' ); ?>
                    <?php if ( $banner_ads_top ) : ?>
                        <img src="<?php echo esc_url( $banner_ads_top['url'] ); ?>" alt="<?php echo esc_attr( $banner_ads_top['alt'] ); ?>" />
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
</div>