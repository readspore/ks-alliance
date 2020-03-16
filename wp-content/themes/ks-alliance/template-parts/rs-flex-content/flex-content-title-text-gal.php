<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
?>
<!-- LICENCES -->
<div class="licences">
<div class="container">
  <div class="licences__inner d-flex">
    <div class="licences__about">
      <h3 class="licences__title"><?php echo $data["title"]; ?></h3>
      <div class="licences__text"><?php echo $data["text"]; ?></div>
    </div>
    <div class="licences__gallery d-flex">
    	<?php if (!empty($data["gal"])): ?>
    		<?php foreach ($data["gal"] as $gal): ?>
      			<a 
      				data-fancybox="gallery" 
      				href="<?php echo $gal["url"]; ?>"
      			>
      				<img src="<?php echo $gal["sizes"]["medium"]; ?>" />
      			</a>
    		<?php endforeach ?>
    	<?php endif ?>
    </div>
  </div>
</div>
</div>
<!-- END LICENCES  -->