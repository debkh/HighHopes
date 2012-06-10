<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'focus' => array($model, 'username'),
    'htmlOptions' => array(
        'class' => 'form',
    ),
)); ?>

    <div class="group">
        <?php if($model->hasErrors('username')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
        <?php echo $form->labelEx($model, 'username', array('class' => 'label')); ?>
        <?php if ($model->hasErrors('username')): ?>
        <span class="error"><?php echo $model->getError('username'); ?></span>
			</div>
		<?php endif; ?>
        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255, 'class' => 'text_field')); ?>
    </div>

    <div class="group">
        <?php if($model->hasErrors('password')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
        <?php echo $form->labelEx($model, 'password', array('class' => 'label')); ?>
        <?php if ($model->hasErrors('password')): ?>
        <span class="error"><?php echo $model->getError('password'); ?></span>
			</div>
		<?php endif; ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'text_field')); ?>
    </div>

    <div class="group">
        <?php if($model->hasErrors('rememberMe')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
        <?php echo $form->labelEx($model, 'rememberMe', array('class' => 'label')); ?>
        <?php if ($model->hasErrors('rememberMe')): ?>
        <span class="error"><?php echo $model->getError('rememberMe'); ?></span>
			</div>
		<?php endif; ?>
        <?php echo $form->checkBox($model,'rememberMe'); ?>
    </div>


	<div class="group navform wat-cf">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
