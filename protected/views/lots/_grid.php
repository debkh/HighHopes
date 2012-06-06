<?php $provider = $model->search(); ?>
<div class="inner" id="lots-grid-inner">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'lots-grid',
		'summaryText' => 'Lots {start} - {end} of {count}',
		'emptyText' => 'There are no data to display',
		'updateSelector' => '#lots-grid-actions .pagination a, #lots-grid .table thead th a',
		'afterAjaxUpdate' => "js:function(id, data){var id = '#' + id + '-actions'; \$(id).replaceWith(\$(id, '<div>' + data + '</div>'))}",
		'selectableRows' => 0,
		'showTableOnEmpty' => false,
		'dataProvider' => $provider,
		'cssFile' => false,
		'itemsCssClass' => 'table',
		'pagerCssClass' => 'pagination',
		'template' => '{items}',
		'columns' => array(
			'id',
			'auction_id',
			'name',
			'description',
			array(
				'class' => 'EButtonColumn',
				'deleteConfirmation' => 'Do you really want to delete this lots?',
			),
		),
	)); ?>
	<div class="actions-bar wat-cf" id="lots-grid-actions">
		<div class="actions">
			<button class="button action-create" type="button">
				<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/create.png', 'Create'); ?> Create lots
			</button>
		</div>
		<?php $this->widget('application.components.widgets.ELinkPager', array(
			'cssFile' => false,
			'pages' => $provider->getPagination(),
		)); ?>
	</div>
</div>