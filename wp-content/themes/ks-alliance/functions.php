<?php

require_once get_template_directory() . '/inc/dev-functions.php';
require_once get_template_directory() . '/inc/hooks.php';
require_once get_template_directory() . '/inc/ajax-hendlers.php';


add_theme_support( 'post-thumbnails' );

add_filter('show_admin_bar', '__return_false');

add_filter('show_admin_bar', '__return_false'); 

add_action ( 
  'wp_head',
  function ()
  {
    ?>
    <script>
      window.themeDirectoryUrl = '<?php echo get_template_directory_uri(); ?>';
      window.ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php 
  }
);

// add_theme_support( 'menus' );
// add_action( 
//     'after_setup_theme', 
//     function(){
//         register_nav_menus( [
//             'header_menu' => 'menu_v_shapke'
//         ] );
//     } 
// );

add_action( 
    'wp_enqueue_scripts', 
    function(){ 
        wp_enqueue_style( 'true_style', get_stylesheet_directory_uri() . '/style.css' );
        // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/public/js/rs_main.js', array(), '1.0.0', true );
    }
);

function rs_render_flex_content_part($rs_flex_content)
{
  if (!empty($rs_flex_content)) {
    foreach ($rs_flex_content as $data) {
      $layout = $data;
      if (is_array($data))
        $layout = array_shift($data);
      if (file_exists(get_template_directory() . '/template-parts/rs-flex-content/flex-content-'.$layout.'.php')) {          
          $GLOBALS['rs-flex-content-template-data'] = $rs_flex_content;
          get_template_part( 'template-parts/rs-flex-content/flex-content', $layout );
          unset( $GLOBALS['rs-flex-content-template-data'] );
      }
    }
  }
}

function rs_get_prod_img_url($product = null)
{
  return empty($product && $img = wp_get_attachment_image_url( $product->get_image_id(), 'full' ))
    ? wc_placeholder_img_src()
    : $img;
}