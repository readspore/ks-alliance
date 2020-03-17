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
$max_count = count($query->posts) - count($query->posts) % 5;
$i = 0;
// array_splice($query->posts, count($query->posts) - count($query->posts)  % 4);
// dd($query->posts);
if(!$query->have_posts())
  return;
?>

    <div class="gallery">
        <div class="projects__gallery d-flex">
          <?php 
            while ( $query->have_posts() && $i + 5 <= $max_count ) :
              $query->the_post();
              ++$i;
          ?>
            <!--BLOCK-->
            <div class="projects__wrap">
                <div class="projects__bigimage">
                    <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                    <a href="articleinner.html">
                        <div class="background__blur">
                            <div class="projects__hover d-flex">
                              <div class="info-wrap">
                                  <h2 class="card__title"><?php the_title(); ?></h2>
                                  <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--BLOCK-->
            <div class="projects__wrap d-flex f-wrap">
                <!-- Item  -->
                <div class="projects__card">
                  <?php 
                    $post = $query->next_post();
                    ++$i;
                  ?>
                    <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                    <a href="articleinner.html">
                        <div class="background__blur">
                            <div class="projects__hover d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item  -->
                <div class="projects__card">
                  <?php 
                    $post = $query->next_post();
                    ++$i;
                  ?>
                    <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                    <a href="articleinner.html">
                        <div class="background__blur">
                            <div class="projects__hover d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item  -->
                <div class="projects__card">
                  <?php 
                    $post = $query->next_post();
                    ++$i;
                  ?>
                    <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                    <a href="articleinner.html">
                        <div class="background__blur">
                            <div class="projects__hover d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Item  -->
                <div class="projects__card">
                  <?php 
                    $post = $query->next_post();
                    ++$i;
                  ?>
                    <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                    <a href="articleinner.html">
                        <div class="background__blur">
                            <div class="projects__hover d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
          <?php
             endwhile; 
          ?>
        </div>
    </div>
<?php wp_reset_postdata(); ?>