<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
?>
<!--company info-->
<div class="company">
    <div class="container">
        <div class="company__comments d-flex">
        	<?php foreach ($data["blocks"] as $key => $block): ?>
	            <div class="left__comment">
	                <h2 class="info__title"><?php echo $block["block-1-title"] ?></h2>
	                <div class="info__text">
						<?php echo $block["block-1-text"] ?>
	                </div>
	            </div>
	            <div class="vertical-divider"></div>
	            <div class="right__comment">
	                <h2 class="info__title"><?php echo $block["block-2-title"] ?></h2>
	                <div class="info__text">
						<?php echo $block["block-2-text"] ?>
	                </div>
	            </div>
        	<?php endforeach ?>
        </div>
    </div>
</div>