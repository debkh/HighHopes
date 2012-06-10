<pre><?php $provider = $model->search();?></pre>
<div class="inner" id="auction-grid-inner">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'auction-grid',
		'summaryText' => 'Auctions {start} - {end} of {count}',
		'emptyText' => 'There are no data to display',
		'updateSelector' => '#auction-grid-actions .pagination a, #auction-grid .table thead th a',
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
            'owner.username::Owner',
			'name',
			'description',
            'lotsCount::Lots',
			array(
				'class' => 'EButtonColumn',
				'deleteConfirmation' => 'Do you really want to delete this auction?',
			),
		),
	)); ?>
	<div class="actions-bar wat-cf" id="auction-grid-actions">
		<div class="actions">
			<button class="button action-create" type="button">
				<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/create.png', 'Create'); ?> Create auction
			</button>
		</div>
		<?php $this->widget('application.components.widgets.ELinkPager', array(
			'cssFile' => false,
			'pages' => $provider->getPagination(),
		)); ?>
	</div>
</div>