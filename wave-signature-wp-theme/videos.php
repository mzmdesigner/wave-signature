<?php 
    /* Template Name: Videos List Page */
get_header(); ?>

<?php get_template_part('inc/top-page', 'page'); ?>

<?php get_template_part('inc/banner-ads1', 'page'); ?>

<div id="videos-page" class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!-- Start content area -->
                <div class="content-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                <div class="row">
                                    <?php $ourCurrentPage = get_query_var('paged')?>
                                    <?php $args = array('post_type' => 'videos', 'posts_per_page' => 6, 'paged' => $ourCurrentPage ); ?>
                                    <?php $videos = new WP_Query($args); ?>
                                    <?php if ($videos->have_posts()) : ?>
                                    <?php while ($videos->have_posts()) : $videos->the_post(); ?>
                                    <?php echo '<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">'; ?>
                                        <div class="video-item">
                                            <?php if( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail('videoThumb'); ?>
                                            <?php endif; ?>
                                            <div class="play">
                                                <a href="<?php the_field( 'video_url' ); ?>" target="blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                        <path fill="none" d="M0 0h24v24H0z"/>
                                                        <path d="M16.394 12L10 7.737v8.526L16.394 12zm2.982.416L8.777 19.482A.5.5 0 0 1 8 19.066V4.934a.5.5 0 0 1 .777-.416l10.599 7.066a.5.5 0 0 1 0 .832z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="date">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8z"/>
                                                        </svg>
                                                    </span>
                                                    <span>
                                                    <?php the_time('F j, Y'); ?>
                                                    </span>
                                                </div>
                                                <div class="video-title">
                                                    <h4>
                                                        <a href="<?php the_field( 'video_url' ); ?>" traget="blank">
                                                        <?php the_title(); ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php echo '</div>'; ?>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                        <p class="alert alert-warning">
                                            <?php echo 'Oh Oh! .. No Content Found Here :('; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <nav aria-label="Page">
                                            <?php echo paginate_links(array('total' => $videos->max_num_pages)); ?>
                                        </nav>
                                    </div>
                                </div>
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

<?php get_template_part('inc/banner-ads2', 'page'); ?>

<?php get_footer(); ?>