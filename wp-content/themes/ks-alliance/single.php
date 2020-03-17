<?php
  $post = $wp_query->post;
  get_header(); 
  if (in_category(3)) { //ID категории
      include(TEMPLATEPATH.'/single-article.php');
  } else if (in_category(2)) { //ID категории
      include(TEMPLATEPATH.'/single-service.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
  get_footer();
?>