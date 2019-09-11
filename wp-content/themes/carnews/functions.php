<?php
function main_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'main_menu' );

add_theme_support( 'post-thumbnails' );

// Image size for single posts
add_image_size( 'single-post-thumbnail', 300, 300 );
add_image_size( 'post-thumbnail', 300, 300 );

//for showing categories
  function outputcategories()
  {
      ?>
      <ul>
          <?php
          $categories = get_categories();
          foreach($categories as $category)
          {
              ?>
              <li><a href="<?php echo get_category_link($category->cat_ID);?>"><?php echo $category->name ?></a></li>
              <?php
          }

          ?>
      </ul>
      <?php
  }

  //widget register

function my_widget_sidebar() {
    register_sidebar( array(
        'name' => esc_html__( 'Home page sidebar one', 'news' ),
        'description' => esc_html__( 'Home page sidebar one description', 'news' ),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="siderbar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Footer Widget One', 'news' ),
        'description' => esc_html__( 'Footer Widget One description', 'news' ),
        'id' => 'footer-1',
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Footer Widget Two', 'news' ),
        'description' => esc_html__( 'Footer Widget Two description', 'news' ),
        'id' => 'footer-2',
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Footer Widget Three', 'news' ),
        'description' => esc_html__( 'Footer Widget Three description', 'news' ),
        'id' => 'footer-3',
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Footer Widget Four', 'news' ),
        'description' => esc_html__( 'Footer Widget Four description', 'news' ),
        'id' => 'footer-4',
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action('widgets_init', 'my_widget_sidebar');
  ?>
