<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
?>
  <!--CARDBOX-->
  <div class="cardbox">
    <div class="container">
      <div class="cardbox__inner d-flex">
        <!--card-->
        <?php foreach ($data["blocks"] as $key => $value): ?>
	        <div class="cardbox__card">
	          <div class="cardbox__text">
	            <h2 class="cardbox__header"><?php echo $value["title"]; ?></h2>
	            <div class="cardbox__text"><?php echo $value["text"]; ?></div>
	            <div class="send__button" onclick="openRequest('<?php echo $value["title"]; ?>')">
	              Отправть заявку
	            </div>
	          </div>
	        </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>
  <!--END CARDBOX-->
  <!-- POPUP REQUEST-->
  <div class="popup" id="request">
    <div class="popup__blur" onclick="closeRequest(event)">
      <div class="popup-window" id="popup-request">
        <form
          action="<?php echo admin_url('admin-ajax.php'); ?>" 
          enctype="multipart/form-data"
          class="popup-window__form" 
          onsubmit="rs_SubmitFormHandler(event)"
        >
          <input type="hidden" name="form-title">
          <input type="hidden" name="action" value="rs_service_popup">
          <input type="hidden" name="service-link">
          <a class="close" onclick="closeRequest(event)"></a>
          <label class="form__label">Хочу с вами работать</label>
          <input class="form__input" type="text" name="name" id="" placeholder="Имя*" required minlength="4" />
          <input class="form__input" type="tel" name="phone" id="" placeholder="Телефон*" data-rs-phone-mask required />
          <button class="form__button" type="submit">Отправить заявку</button>
          <p class="tender__message">Отправляя заявку, вы соглашаетесь
            с политикой конфиденциальности</p>
        </form>
      </div>
    </div>
  </div>
  <!--END REQUEST-->