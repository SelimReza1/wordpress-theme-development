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
  ?>
