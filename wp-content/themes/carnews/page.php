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
                </div>
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <?php esc_html_e('Sorry, No post found'); ?>
<?php endif; ?>

<?php get_footer(); ?>