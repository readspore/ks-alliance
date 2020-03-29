
  <div class="header-wrap" style="background: url(<?php echo get_field("main_img", get_the_ID() ) ?>) center no-repeat;">
    <div class="header-blur d-flex">
      <!-- TITLE-->
      <div class="title">
        <div class="container">
          <div class="title__inner">
            <h1><?php echo get_field("main-title", get_the_ID() ); ?></h1>
          </div>
        </div>
      </div>
      <!-- TITLE END-->
      <!-- Undertitle-->
      <div class="undertitle">
        <div class="container">
          <div class="undertitle__inner d-flex">
            <div class="info-wrap">
              <h2 class="card__title"><?php the_title(); ?></h2>
              <p class="card__text"><?php echo get_field("subtitle", get_the_ID() ); ?></p>
            </div>
          </div>
        </div>
      </div>
      <!--END  Undertitle-->
    </div>
  </div>
  <?php rs_exec_flex_content(); ?>
