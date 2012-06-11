
<div class="inner" id="lots-grid-inner">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'lots-grid',

    'summaryText' => 'Lots {start} - {end} of {count}',
    'emptyText' => 'There are no data to display',
    'updateSelector' => '#lots-grid-actions .pagination a, #lots-grid .table thead th a',
    'afterAjaxUpdate' => "js:function(id, data){var id = '#' + id + '-lots'; \$(id).replaceWith(\$(id, '<div>' + data + '</div>'))}",
    'selectableRows' => 0,
    'showTableOnEmpty' => false,
    'dataProvider' => $lotsProvider,
    'cssFile' => false,
    'itemsCssClass' => 'table',
    'pagerCssClass' => 'pagination',
    'template' => '{items}',
    'columns' => array(
        'id',
        'name',
        'description',
        array(
            'class' => 'EButtonColumn',
            'deleteConfirmation' => 'Do you really want to delete this auction?',
            'viewButtonUrl'=>'Yii::app()->createUrl("/lots/view", array("id" => $data->id))',
            'deleteButtonUrl'=>'Yii::app()->createUrl("/lots/delete", array("id" => $data->id))',
            'updateButtonUrl'=>'Yii::app()->createUrl("/lots/update", array("id" => $data->id))',
        ),
    ),

)); ?>
</div>