<?php
$url = CJavaScript::quote($this->createUrl('create'), true);
Yii::app()->clientScript
	->registerCoreScript('jquery')
	->registerScript('auction-grid-init', "
$('#auction-grid-actions button.action-create').live('click', function(){
	document.location.href = '{$url}';
	return false;
});
	");
$this->menu = array(
	array('label' => 'Auctions', 'url' => array('index')),
	array('label' => 'Create auction', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Auctions</h2>
		<?php $this->renderPartial('_grid', array(
			'model' => $model,
		)); ?>
	</div>
</div>