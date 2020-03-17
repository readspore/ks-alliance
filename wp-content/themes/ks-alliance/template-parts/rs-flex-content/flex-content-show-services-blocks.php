<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
$query = new WP_Query( 'category__in=2' );
if(!$query->have_posts())
	return;
?>
<!-- GALLERY-->
  <div class="infogallery">
    <div class="container">
      <div class="infogallery__inner d-flex">
		<?php 
			while ( $query->have_posts() ) :
				$query->the_post();
		?>
			<!-- ITEM -->
			<div class="infogallery__card">
			  <a href="service.html"  >
			    <div class="infogallery__blur">
			      <div class="infogallery__text d-flex">
			        <div class="info-wrap">
			          <h2 class="card__title"><?php the_title(); ?></h2>
			          <p class="card__text">
			            <?php echo get_field("subtitle", get_the_ID()); ?>
			          </p>
			        </div>
			        <p class="card__price">
			            <?php echo get_field("price", get_the_ID()); ?>
			        </p>
			      </div>
			    </div>
			  </a>
			</div>
			<!-- END ITEM -->
		<?php
			 endwhile; 
		?>
      </div>
    </div>
  </div>
<!-- GALLERY END -->

<?php wp_reset_postdata(); ?>