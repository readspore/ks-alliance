<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/libs/swiper-5.3.6/package/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/opensanscss/stylesheet.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/playfairdisplay/stylesheet.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery-nice-select-1.1.0/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery-nice-select-1.1.0/js/jquery.nice-select.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery-nice-select-1.1.0/css/nice-select.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

  <title><?php echo get_bloginfo(); ?> <?php wp_title(' - '); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- POPUP TENDER-->
  <div class="popup" id="tender">
    <div class="popup__blur" id="popup__blur" onclick="closeTender(event)">
      <div class="popup-window">
        <form action="" class="popup-window__form" id="popup-window">
          <a class="close" id="close" onclick="closeTender(event)"></a>
          <label class="form__label">Хочу с вами работать</label>
          <input class="form__input" type="text" name="name" id="" placeholder="Ваша компания*">
          <input class="form__input" type="text" name="name" id="" placeholder="Имя*">
          <input class="form__input" type="tel" name="phone" id="" placeholder="Телефон*">
          <textarea name="about__tender" class="about__tender" id="about__tender" cols="30" rows="10"
            placeholder="Расскажите о тендере*"></textarea>
          <button class="form__button" type="submit">Отправить заявку</button>
          <p class="tender__message">Отправляя заявку, вы соглашаетесь
            с политикой конфиденциальности</p>
        </form>
      </div>
    </div>
  </div>


  <!-- MOBILE MENU -->
  <div class="mobile" id="mobile-nav">
    <div class="container">
      <div class="mobile__menu" id="mobile-blur" onclick="closeMenu(event)">
        <div class="menu-wrap" id="mobile-wrap">
          <nav class="navbar">
            <a class="navbar__link" href="<?php echo get_home_url(); ?>">ГЛАВНАЯ</a>
            <?php the_services("navbar__link"); ?>
            <?php the_header_additional_links("navbar__link"); ?>
          </nav>
        </div>

      </div>
    </div>
  </div>
  <!-- END MOBILE MENU -->
  <!-- HEADER -->
  <div class="header">
    <div class="container">
      <div class="header__inner d-flex">
        <div class="header__left d-flex">
          <div class="header__logo">
            <a href="<?php echo get_home_url(); ?>">
              <img class="logotype" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/horizontal_on_transparent_curves_by_logaster.svg"
                alt="Alliance logo" />
            </a>

          </div>
          <div class="header__navbar">
            <nav>
              <a class="navbar__link" href="<?php echo get_home_url(); ?>">ГЛАВНАЯ</a>

              <div class="dropdown">
                <div class="navbar__link">УСЛУГИ
                  <i class="down-arrow"></i>
                </div>
                <div class="dropdown-content">
                  <?php the_services(); ?>
                </div>
              </div>
              <?php the_header_additional_links("navbar__link"); ?>
            </nav>
          </div>
        </div>
        <div class="header__right d-flex">
          <a class="tender__button" id="tender__button" href="#" onclick="openTender(event)">пригласить в тендер</a>
          <div class="header__contacts d-flex">
			<?php 
				$phone = get_field("phone", 22);
				$view_phone = rs_get_view_phone($phone, "W", "<span>", "</span>");
				$call_phone = rs_get_call_phone($phone);
			?>
            <a target="_self" href="tel:<?php echo $call_phone; ?>">
            	<img 
            		class="header__phone fl"
            		src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.svg"
                	href="tel:<?php echo $call_phone; ?>" 
                	alt="phone icon" 
                />
            </a>
            <a target="_self" href="tel:<?php echo $call_phone; ?>"><?php echo $view_phone; ?></a>
            <a href="javascript:void(0);" onclick="openMenu()" id="menu-icon">
              <div class="burger-line first" id="burger-line1"></div>
              <div class="burger-line second" id="burger-line2"></div>
              <div class="burger-line third" id="burger-line3"></div>
              <div class="burger-line fourth" id="burger-line4"></div>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- HEADER END -->
    <div class="center-wrap">
  		<?php the_post(); ?>
