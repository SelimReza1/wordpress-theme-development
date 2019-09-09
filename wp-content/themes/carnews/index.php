<?php get_header(); ?>
<?php get_template_part('slider'); ?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                        <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="post-box">
                                    <div class="inner-post-box">
                                        <div class="image-box">
                                            <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                            <div class="post-caption transition7s">
                                                <ul>
                                                    <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                    <li><i class="fa fa-calendar"></i> <?php the_time('g:i a'); ?> </li>
                                                    <li><i class="fa fa-comment"></i> <?php
                                                        comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
                                                        ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                            <div class="text-des">
                                                <?php the_excerpt(); ?>
                                            </div>

                                        </div>
                                        <div class="post-info clearfix">
                                            <div class="pull-left">
                                                <a class="btn btn-primary transition7s" href="news-single.html"><i
                                                            class="fa fa-calendar"></i> <?php the_time('M D,Y'); ?></a>
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                            <div class="pagi">
                                <?php
                                the_posts_pagination(array(
                                        'prev_text' => '<<',
                                        'next_text' => '>>'
                                ));
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer(); ?>