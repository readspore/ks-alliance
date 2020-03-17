<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
  return;
?>
<div class="company">
  <div class="container">
      <div class="article__header">
          <h2><?php echo $data["title"]; ?></h2>
          <?php echo $data["text"]; ?>
      </div>
  </div>
</div>