<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/web-app-theme/base.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/web-app-theme/themes/activo/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/web-app-theme/override.css" type="text/css" media="screen"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>
					<a href="<?php echo Yii::app()->homeUrl; ?>"><?php echo Yii::app()->name; ?></a>
				</h1>
				<div id="user-navigation">

					<?php $this->widget('zii.widgets.CMenu', array(
						'items' => array(
                            array('label' => Yii::app()->user->name, 'linkOptions' => array('class' => 'text-white'), 'visible' => !Yii::app()->user->isGuest),
							array('label' => 'Logout', 'url' => array('/site/logout'), 'linkOptions' => array('class' => 'osx'), 'visible' => !Yii::app()->user->isGuest),
						),
						'htmlOptions' => array(
							'class' => 'wat-cf',
						),
					)); ?>
				</div>
				<div id="main-navigation">
					<?php $this->widget('zii.widgets.CMenu', array(
						'items' => array(
                            array('label' => 'Main', 'url' => array('/auction'),'itemOptions' => array('class' => 'first')),
                            array('label' => 'Create Auction', 'url' => array('/auction/create')),
							// Place menu items here, first item should have class 'first' (use 'itemOptions' => array('class' => 'first'))
						),
						'htmlOptions' => array(
							'class' => 'wat-cf',
						),
					)); ?>
				</div>
			</div>
			<div id="wrapper" class="wat-cf">
				<?php echo $content; ?>
			</div>
		</div>
	</body>
</html>