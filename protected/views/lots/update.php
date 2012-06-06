<?php
$this->menu = array(
	array('label' => 'Lots', 'url' => array('index')),
	array('label' => 'Create lots', 'url' => array('create')),
	array('label' => 'Update lots', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete lots', 'url' => '#', 'linkOptions' => array(
		'submit' => array('delete', 'id' => $model->id),
		'confirm' => 'Do you really want to delete this lots?',
	)),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Update lots</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>