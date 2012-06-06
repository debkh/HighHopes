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
		<h2 class="title">Auction's details</h2>
		<div class="inner">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data' => $model,
				'attributes' => array(
					'id',
					'name',
					'description',
					'other',
				),
				'itemTemplate' => "<tr class=\"{class}\"><td style=\"width: 120px\"><b>{label}</b></td><td>{value}</td></tr>\n",
				'htmlOptions' => array(
					'class' => 'table',
				),
			)); ?>
		</div>
	</div>
</div>