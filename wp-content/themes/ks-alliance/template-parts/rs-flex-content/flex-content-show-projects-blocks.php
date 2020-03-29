<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
// dd($data);

if (empty($data))
  return;
$query = new WP_Query( 
          array(
            "category__in" => 4,
            'posts_per_page' => -1
          )
         );
$max_count = count($query->posts) - count($query->posts) % 4;
$i = 0;
// array_splice($query->posts, count($query->posts) - count($query->posts)  % 4);
// dd($query->posts);
if(!$query->have_posts())
  return;
?>
  <!-- PROJECTS  -->
  <div class="projects">
    <div class="container">
      <div class="projects__header">
        <h3 class="projects__title"><?php echo $data["title"]; ?></h3>
      </div>
    </div>
    <div class="projects__gallery d-flex">
      <?php 
        while ( $query->have_posts() && $i < $max_count ) :
          $query->the_post();
          ++$i;
      ?>
        <!-- Item  -->
        <div class="projects__card">
          <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
          
            <div class="background__blur">
              <div class="projects__hover d-flex">
                <div class="project__info d-flex">
                  <h2 class="card__title"><?php the_title(); ?></h2>
                  <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?> </p>
                </div>
                <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
              </div>
            </div>
        
        </div>
        <!-- Item End  -->
      <?php
         endwhile; 
      ?>
    </div>

  </div>

<?php wp_reset_postdata(); ?>