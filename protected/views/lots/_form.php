<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'lots-form',
	'enableAjaxValidation' => false,
	'focus' => array($model, 'auction_id'),
	'htmlOptions' => array(
		'class' => 'form',
	),
)); ?>
		

		<?php echo $form->hiddenField($model, 'auction_id', array('class' => 'text_field')); ?>

		
	<div class="group">
		<?php if($model->hasErrors('name')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'name', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('name')): ?>
				<span class="error"><?php echo $model->getError('name'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('description')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'description', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('description')): ?>
				<span class="error"><?php echo $model->getError('description'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 512, 'class' => 'text_field')); ?>
	</div>

    <div class="group">
        <?php if($model->hasErrors('price')): ?>
                <div class="fieldWithErrors">
            <?php endif; ?>
        <?php echo $form->labelEx($model, 'price', array('class' => 'label')); ?>
        <?php if ($model->hasErrors('price')): ?>
        <span class="error"><?php echo $model->getError('price'); ?></span>
                </div>
            <?php endif; ?>
        <?php echo $form->textField($model, 'price', array('size' => 60, 'maxlength' => 512, 'class' => 'text_field')); ?>
    </div>
	
	<div class="group navform wat-cf">
		<button class="button" type="submit">
			<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/save.png', $model->isNewRecord ? 'Create' : 'Save'); ?> <?php echo $model->isNewRecord ? 'Create' : 'Save'; ?>
		</button>
		<span class="text_button_padding">or</span>
		<?php echo CHtml::link('Cancel', array('index'), array('class' => 'text_button_padding link_button')); ?>
	</div>
<?php $this->endWidget(); ?>