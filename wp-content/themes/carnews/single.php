<?php get_header(); ?>
   <?php get_template_part('slider'); ?>

    <!-- News / Blog section  
    ============================================= -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title(); ?></h2>
                       <?php the_content(); ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h3>Related Posts</h3>
                                <?php
                                //for use in the loop, list 5 post titles related to first tag on current post
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    echo 'Related Posts';
                                    $first_tag = $tags[0]->term_id;
                                    $args=array(
                                        'tag__in' => array($first_tag),
                                        'post__not_in' => array($post->ID),
                                        'posts_per_page'=>3,
                                        'caller_get_posts'=>1
                                    );
                                    $my_query = new WP_Query($args);
                                    if( $my_query->have_posts() ) {
                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="related_post_item">
                                                    <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>                                          <?php the_excerpt(); ?>
                                                </div>
                                            </div>

                                            <?php
                                        endwhile;
                                    }
                                    wp_reset_query();
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <?php comments_template('comments.php',true) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <?php esc_html_e('Sorry, No post found'); ?>
<?php endif; ?>

<?php get_footer(); ?>