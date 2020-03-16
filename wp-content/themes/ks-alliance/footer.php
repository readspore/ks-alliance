 <!-- CONTACTS  -->
  <div class="contacts">
    <div class="container">
      <div class="contacts__container d-flex">
        <div class="contacts__inner">
          <div class="contacts__wrap d-flex">
            <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.svg" alt=" calling phone">
            <p class="contacts__phone">8 (812) 922-08-68</p>
          </div>
          <div class="contacts__wrap d-flex">
            <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/pin.svg" alt=" map pin">
            <p>г. Санкт-Петербург, Приморский
              пр-к, 14, пом. 6М</p>
          </div>
          <div class="contacts__wrap d-flex">
            <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.svg" alt="clock">
            <p>9:00-18:00</p>
          </div>
          <div class="contacts__wrap d-flex">
            <img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail.svg" alt="mail">
            <p>st.alliance.group@gmail.com</p>
          </div>
          <a class="tender__button" id="tender__button" onclick="openTender(event)" href="#">пригласить в тендер</a>
        </div>
        <div class="vertical-divider"></div>
        <div class="activity">
          <h4>Деятельность</h4>
          <a href="service.html">Кадастровые работы
          </a>
          <a href="service.html">Согласование в КГА, КГИОП, ГКУ
            Имущество Санкт-Петербурга</a>
          <a href="service.html">Согласование перепланировок </a>
          <a href="service.html">Проектные работы. Реконструкция
            объектов недвижимости</a>
        </div>
        <div class="articles">
          <h4>Статьи</h4>
          <a href="articleinner.html">Как выбрать подрядчика?
          </a>
          <a href="articleinner.html">Сколько стоит комплексная
            работа по проектированию?</a>
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
        <p class="footer__text">ООО «Альянс» - команда квалифицированных специалистов, оказывающих следующие виды услуг:
          кадастровые работы, разработка и согласование проектной документации,
          технического обследования зданий и сооружений. В основе нашей работы лежат принципы открытого диалога и
          честотности, взяв на себя обязательства перед заказчиком,
          мы выдаем на конечном этапе качественный «продукт», отвечая свой репутацией. </p>

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

            <a target="_self" href="tel:88129220868"><img class="header__phone fl" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.svg"
                href="tel:88129220868" alt="phone icon" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
  <!-- END FOOTER  -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
</body>

</html>