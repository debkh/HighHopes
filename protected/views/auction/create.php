<?php
$this->menu = array(
	array('label' => 'Auctions', 'url' => array('index')),
	array('label' => 'Create auction', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Create new auction</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>