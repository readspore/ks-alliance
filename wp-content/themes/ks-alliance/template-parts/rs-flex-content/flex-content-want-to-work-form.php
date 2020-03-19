<!-- FORM  -->
<div class="form">
  <div class="container">
    <form 
      action="<?php echo admin_url('admin-ajax.php'); ?>" 
      enctype="multipart/form-data"
      onsubmit="rs_SubmitFormHandler(event, 'with-dd-1')"
      class="form__inner"
    >
      <input type="hidden" name="form-title" value="Хочу с вами работать (форма с выпадающим списком)">
      <input type="hidden" name="action" value="rs_want_to_work_second">
      <label class="form__label">Хочу с вами работать</label>
      <div class="form__container d-flex">
        <input class="form__input" type="text" name="name" id="" placeholder="Имя*"  required minlength="4">
        <input class="form__input" type="tel" name="phone" id="" placeholder="Телефон*" data-rs-phone-mask required>
        <div class="select__wrap">
          <select class="form__select" id="service-form-inp" name="service" value=''>
            <option selected disabled hidden value=''>Услуга*</option>
            <?php 
                $query = new WP_Query( 'category__in=2&posts_per_page=-1' );
                if(!$query->have_posts())
                    return;
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<option value="'.get_the_title( get_the_ID() ).'">'.get_the_title( get_the_ID() ).'</option>';
                }
            ?>
            <?php $country_list_for_form = get_field("country_list_for_form", 22); ?>
            <?php if (!empty($country_list_for_form)): ?>
              <?php foreach ($country_list_for_form as $country): ?>
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