<?php
$this->menu = array(
	array('label' => 'Auctions', 'url' => array('index')),
	array('label' => 'Create auction', 'url' => array('create')),
	array('label' => 'Update auction', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete auction', 'url' => '#', 'linkOptions' => array(
		'submit' => array('delete', 'id' => $model->id),
		'confirm' => 'Do you really want to delete this auction?',
	)),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Update auction</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>