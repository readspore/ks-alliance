 <!-- CONTACTS  -->
  <div class="contacts">
    <div class="container">
      <div class="contacts__container d-flex">
        <div class="contacts__inner">
          <?php $footer_info_col = get_field("footer_info_col", 22 ); ?>
          <?php if (!empty($footer_info_col)): ?>
            <?php foreach ($footer_info_col as $col): ?>
              <?php 
                if ($col["the_field_type"] == "telefon") {
                  ?>
                    <div class="contacts__wrap d-flex">
                      <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.svg" alt=" calling phone">
                      <a class="contacts__phone" href="tel:<?php echo rs_get_call_phone($col["text"]) ?>">
                        <?php echo $col["text"]; ?>
                      </a>
                    </div>
                  <?php 
                } elseif ($col["the_field_type"] == "email") {
                  ?>
                    <div class="contacts__wrap d-flex">
                      <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail.svg" alt=" calling phone">
                      <a href="mailto:<?php echo $col["text"]; ?>">
                        <?php echo $col["text"]; ?>
                      </a>
                    </div>
                  <?php 
                } else {
                  ?>
                    <div class="contacts__wrap d-flex">
                      <img class="header__phone fl" src="<?php echo $col["icon"]; ?>" alt="">
                      <p>
                        <?php echo $col["text"]; ?>
                      </p>
                    </div>
                  <?php 
                }
              ?>
            <?php endforeach ?>
          <?php endif ?>
          <a class="tender__button" id="tender__button" onclick="openTender(event)" href="#">пригласить в тендер</a>
        </div>
        <div class="vertical-divider"></div>
        <div class="activity">

          <h4>Деятельность</h4>
          <?php the_services(); ?>
        </div>
        <div class="articles">
          <h4>Статьи</h4>
          <?php the_last_articls(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTACTS  -->
  <!-- FOOTER  -->
  <div class="footer">
    <div class="container">
      <div class="horizontal-divider"></div>
      <div class="footer__inner d-flex">
        <div class="footer__logo">
          <a href="mainpage.html">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/horizontal_on_transparent_curves_by_logaster.svg" alt="Alliance logo" />
          </a>
        </div>
        <div class="footer__text"><?php echo get_field("footer_text", 22); ?></div>
      </div>
      <div class="header__inner d-flex">
        <div class="header__left d-flex">
          <div class="header__logo">
            <a href="mainpage.html">
              <img class="logotype" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/horizontal_on_transparent_curves_by_logaster.svg"
                alt="Alliance logo" />
            </a>

          </div>
        </div>
        <div class="header__right d-flex">
          <a class="tender__button" id="tender__button" href="#" onclick="openTender(event)">пригласить в тендер</a>
          <div class="header__contacts d-flex">
            <?php $phone = get_field('phone', 22); ?>
            <a target="_self" href="tel:<?php echo rs_get_call_phone($phone); ?>"><img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.svg"
                href="tel:<?php echo rs_get_call_phone($phone); ?>" alt="phone icon" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
  <!-- END FOOTER  -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/swiper-5.3.6/package/js/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery-phone-mask.js"></script>
</body>

</html>