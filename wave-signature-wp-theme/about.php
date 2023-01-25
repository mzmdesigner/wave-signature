<?php 
    /* Template Name: About Page */
get_header(); ?>

<?php get_template_part('inc/top-page', 'page'); ?>

<div id="about-page" class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!-- Start content area -->
                <div class="content-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <?php if( have_posts() ) : ?>
                            <?php while( have_posts() ) : the_post(); ?>
                                <div class="content">
                                    <div class="banner">
                                        <?php if( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail('pageBanner'); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <p class="text-center alert alert-warning">
                                    <?php echo 'Oh Oh! .. No Content Found Here :('; ?>
                                </p>
                            <?php endif; ?>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">

                                <?php get_template_part('inc/sidebar-right', 'page'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content area -->
            </div>  
        </div>
    </div>
</div>

<?php get_template_part('inc/latest-videos', 'page'); ?>

<?php get_footer(); ?>