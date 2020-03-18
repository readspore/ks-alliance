<!-- FORM  -->
<div class="form">
  <div class="container">
    <form 
      action="<?php echo admin_url('admin-ajax.php'); ?>" 
      enctype="multipart/form-data"
      onsubmit="rs_SubmitFormHandler(event)"
      class="form__inner"
    >
      <input type="hidden" name="form-title" value="Хочу с вами работать (форма с выпадающим списком)">
      <input type="hidden" name="action" value="rs_want_to_work">
      <label class="form__label">Хочу с вами работать</label>
      <div class="form__container d-flex">
        <input class="form__input" type="text" name="name" id="" placeholder="Имя*"  required minlength="4">
        <input class="form__input" type="tel" name="phone" id="" placeholder="Телефон*" data-rs-phone-mask>
        <div class="select__wrap">
          <select class="form__select" id="service" name="service" required >
            <option selected disabled hidden>Услуга*</option>
            <?php $country_list_for_form = get_field("country_list_for_form", 22); ?>
            <?php if (!empty($country_list_for_form)): ?>
              <?php foreach ($country_list_for_form as $country): ?>
                <option value="<?php echo $country["text"]; ?>"><?php echo $country["text"]; ?></option>
              <?php endforeach ?>
            <?php endif ?>
          </select>
          <!--<i class="down-arrow select-arrow"></i>-->
        </div>
        <button class="form__button" type="submit">Отправить заявку</button>
      </div>

    </form>
  </div>
</div>