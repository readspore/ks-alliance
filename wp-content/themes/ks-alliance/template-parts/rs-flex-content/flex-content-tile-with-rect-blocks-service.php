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
	            <div class="send__button" onclick="openRequest(event)">
	              Отправть заявку
	            </div>
	          </div>
	        </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>
  <!--END CARDBOX-->