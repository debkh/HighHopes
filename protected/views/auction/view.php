<?php
$this->menu = array(
	array('label' => 'Dashboard', 'url' => array('index')),
    array('label' => 'Create Lot', 'url' => array('/lots/create', 'id' => $model->id)),
	array('label' => 'Edit', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete', 'url' => '#', 'linkOptions' => array(
		'submit' => array('delete', 'id' => $model->id),
		'confirm' => 'Do you really want to delete this auction?',
	)),
);
?>

<div class="block">
	<div class="content">
		<h2 class="title">Detailed view</h2>
		<div class="inner">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data' => $model,
				'attributes' => array(
					'id',
					'name',
					'description',
				),
				'itemTemplate' => "<tr class=\"{class}\"><td style=\"width: 120px\"><b>{label}</b></td><td>{value}</td></tr>\n",
				'htmlOptions' => array(
					'class' => 'table',
				),
			)); ?>
		</div>
    </div>

    <div class="content">
        <h2 class="title">Lots</h2>
        <div class="inner">
            <?php $this->renderPartial('_lots', array(
                    'lotsProvider' => $lotsProvider
            ));?>
        </div>
    </div>
</div>