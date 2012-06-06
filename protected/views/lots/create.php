<?php
$this->menu = array(
	array('label' => 'Lots', 'url' => array('index')),
	array('label' => 'Create lots', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Create new lots</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>