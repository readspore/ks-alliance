<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
// dd($data);

if (empty($data))
  return;
$query = new WP_Query( 
          array(
            "category__in" => 3,
            'posts_per_page' => -1
          )
         );
if(!$query->have_posts())
  return;
?>



    <!--SWIPER-->
    <div class="swiper">
        <div class="container">
            <div class="swiper-container" id="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

      <?php 
        while ( $query->have_posts() ) :
          $query->the_post();
      ?>
        <div class="swiper-slide">
            <div class="infogallery__inner d-flex">
              <!-- ITEM -->
              <div class="infogallery__card">
                  <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>"  >
                      <div class="infogallery__blur">
                          <div class="infogallery__text d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?> </p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                          </div>
                      </div>
                  </a>
              </div>
              <!-- END ITEM -->
              <!-- ITEM -->
              <?php
                $post = $query->next_post();
                if($post) :
              ?>
              <div class="infogallery__card">
                  <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>"  >
                      <div class="infogallery__blur">
                          <div class="infogallery__text d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?> </p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                          </div>
                      </div>
                  </a>
              </div>
              <!-- END ITEM -->
            <?php endif; ?>
              <!-- ITEM -->
              <?php
                $post = $query->next_post();
                if($post) :
              ?>
              <div class="infogallery__card">
                  <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>"  >
                      <div class="infogallery__blur">
                          <div class="infogallery__text d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?> </p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                          </div>
                      </div>
                  </a>
              </div>
              <!-- END ITEM -->
            <?php endif; ?>
              <!-- ITEM -->
              <?php
                $post = $query->next_post();
                if($post) :
              ?>
              <div class="infogallery__card">
                  <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>"  >
                      <div class="infogallery__blur">
                          <div class="infogallery__text d-flex">
                              <div class="info-wrap">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?> </p>
                              </div>
                              <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                          </div>
                      </div>
                  </a>
              </div>
              <!-- END ITEM -->
            <?php endif; ?>
            </div>
        </div>
        <!-- Slides End -->
      <?php
         endwhile; 
      ?>

                </div>
                <!-- If we need pagination -->
                <div class="navigation-wrap d-flex">
                    <div class="arrow-box">

                        <div class="swiper-pagination-container">
                            <div class="left-arrows-wrap disabled" id="left-arrows"
                                onclick="mySwiper.slideTo(0);scrollToSwiper();">
                                <div class="swiper-button-first ">
                                </div>
                                <div class="swiper-button-second">
                                </div>
                            </div>
                            <div class="swiper-button-prev" id="button-prev" onclick="scrollToSwiper();"></div>
                            <div class="swiper-pagination" onclick="scrollToSwiper();"> </div>
                            <div class="swiper-button-next" id="button-next" onclick="scrollToSwiper();"></div>
                            <div class="right-arrows-wrap" id="right-arrows"
                                onclick="mySwiper.slideTo(mySwiper.slides.length - 1);scrollToSwiper();">
                                <div class="swiper-button-first">
                                </div>
                                <div class="swiper-button-second">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!--SWIPER-->

<?php wp_reset_postdata(); ?>

    <script>
      document.addEventListener("DOMContentLoaded", ()=>{
        var menu = ['1', '2', '3']
        window.mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            noSwiping: false,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',


                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },


            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        })
        mySwiper.on('slideChange', function () {
            currentSlide();
        });
      });
    </script>