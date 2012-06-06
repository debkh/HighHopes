<?php $this->beginContent('//layouts/main'); ?>
	<div id="main">
		<div class="block">
			<div class="content">
				<?php echo $content; ?>
			</div>
		</div>
		<?php echo $this->renderPartial('//layouts/_footer'); ?>
	</div>
<?php $this->endContent(); ?>