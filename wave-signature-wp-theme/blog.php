<?php 
    /* Template Name: Blogs List Page */
get_header(); ?>

<?php get_template_part('inc/top-page', 'page'); ?>

<?php get_template_part('inc/banner-ads1', 'page'); ?>

<div id="blog-page" class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!-- Start content area -->
                <div class="content-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                <div class="row">
                                    <?php $args = array('post_type' => 'post','posts_per_page' => 6 ,'order' => 'DESC' ); ?>
                                    <?php $blog = new WP_Query($args); ?>
                                    <?php if ($blog->have_posts()) : ?>
                                        <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                                            <?php echo '<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">'; ?>
                                                <div class="blog-item">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php if( has_post_thumbnail() ) : ?>
                                                            <?php the_post_thumbnail('blogThumb'); ?>
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="caption">
                                                        <div class="social">
                                                            <p>share</p>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                                            <path d="M14 19h5V5H5v14h7v-5h-2v-2h2v-1.654c0-1.337.14-1.822.4-2.311A2.726 2.726 0 0 1 13.536 6.9c.382-.205.857-.328 1.687-.381.329-.021.755.005 1.278.08v1.9H16c-.917 0-1.296.043-1.522.164a.727.727 0 0 0-.314.314c-.12.226-.164.45-.164 1.368V12h2.5l-.5 2h-2v5zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                                            <path d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h14V5H5zm2.5 4a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm-1 1h2v7.5h-2V10zm5.5.43c.584-.565 1.266-.93 2-.93 2.071 0 3.5 1.679 3.5 3.75v4.25h-2v-4.25a1.75 1.75 0 0 0-3.5 0v4.25h-2V10h2v.43z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                                            <path d="M15.3 5.55a2.9 2.9 0 0 0-2.9 2.847l-.028 1.575a.6.6 0 0 1-.68.583l-1.561-.212c-2.054-.28-4.022-1.226-5.91-2.799-.598 3.31.57 5.603 3.383 7.372l1.747 1.098a.6.6 0 0 1 .034.993L7.793 18.17c.947.059 1.846.017 2.592-.131 4.718-.942 7.855-4.492 7.855-10.348 0-.478-1.012-2.141-2.94-2.141zm-4.9 2.81a4.9 4.9 0 0 1 8.385-3.355c.711-.005 1.316.175 2.669-.645-.335 1.64-.5 2.352-1.214 3.331 0 7.642-4.697 11.358-9.463 12.309-3.268.652-8.02-.419-9.382-1.841.694-.054 3.514-.357 5.144-1.55C5.16 15.7-.329 12.47 3.278 3.786c1.693 1.977 3.41 3.323 5.15 4.037 1.158.475 1.442.465 1.973.538z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="blog-date">
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
                                                        <div class="blog-title">
                                                            <h4>
                                                                <a href="<?php the_permalink(); ?>">
                                                                <?php the_title(); ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="blog-short-description">
                                                            <?php the_field( 'short_description' ); ?>
                                                        </div>
                                                        <hr>
                                                        <a href="<?php the_permalink(); ?>" class="bnt btn-link">
                                                            <span>
                                                            Continue reading
                                                            </span>
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                                    <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                                                </svg>
                                                            </span>
                                                        </a>
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
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">prev</span>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link active" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">next</span>
                                                    </a>
                                                </li>
                                            </ul>
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

<?php get_template_part('inc/latest-videos', 'page'); ?>

<?php get_footer(); ?>