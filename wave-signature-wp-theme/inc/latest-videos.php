<!-- Start Videos Section -->
<div class="videos">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="heading">
                    <h2>
                        latest videos
                    </h2>
                    <a href="#" class="btn btn-custom">
                        <span>
                            all videos
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $args = array('post_type' => 'videos','posts_per_page' => 4 ,'order' => 'DESC' ); ?>
            <?php $videos = new WP_Query($args); ?>
            <?php if ($videos->have_posts()) : ?>
                <?php while ($videos->have_posts()) : $videos->the_post(); ?>
                    <?php echo '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">'; ?>
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
    </div>
</div>
<!-- End Videos Section -->