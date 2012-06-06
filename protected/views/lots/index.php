<?php
$url = CJavaScript::quote($this->createUrl('create'), true);
Yii::app()->clientScript
	->registerCoreScript('jquery')
	->registerScript('lots-grid-init', "
$('#lots-grid-actions button.action-create').live('click', function(){
	document.location.href = '{$url}';
	return false;
});
	");
$this->menu = array(
	array('label' => 'Lots', 'url' => array('index')),
	array('label' => 'Create lots', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Lots</h2>
		<?php $this->renderPartial('_grid', array(
			'model' => $model,
		)); ?>
	</div>
</div>