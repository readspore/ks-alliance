<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
?>
<!-- CLIENTS  -->
<div class="clients projects">
  <div class="container">
    <div class="clients__header projects__header">
      <h3 class="clients__title projects__title"><?php echo $data["title"]; ?></h3>
    </div>
    <div class="clients__inner d-flex">
      <?php if (!empty($data["gal"])): ?>
        <?php foreach ($data["gal"] as $gal): ?>
            <div class="client__wrap">
              <img src="<?php echo $gal; ?>" alt="">
            </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
</div>
<!-- END CLIENTS  -->
