<?php 
$data = $GLOBALS['rs-flex-content-template-data'];
if (empty($data))
	return;
?>
<!-- TITLE-->
<div class="title">
<div class="container">
  <div class="title__inner">
    <h1><?php echo $data["text"]; ?></h1>
  </div>
</div>
</div>
<!-- TITLE END-->