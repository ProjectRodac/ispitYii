<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'Predmet', 'url'=>array('/predmet'), 'visible'=>Yii::app()->user->checkAccess('profesor')),
                                array('label'=>'Rijesi ispit', 'url'=>array('/rijesiIspit', 'view'=>'index'), 'visible'=>Yii::app()->user->checkAccess('ucenik')),
				array('label'=>'Ispit', 'url'=>array('/ispit/admin'),'visible'=>Yii::app()->user->checkAccess('ucenik')),
                                array('label'=>'Pitanja ispita', 'url'=>array('/pitanjaIspita/admin'),'visible'=>Yii::app()->user->checkAccess('superuser')),
				//array('label'=>'Pregled učenika', 'url'=>array('/ucenici/user'),'visible'=>Yii::app()->user->checkAccess('profesor')),
                               // array('label'=>'Pitanja', 'url'=>array('/pitanja'),'visible'=>Yii::app()->user->checkAccess('superuser')),
                                array('label'=>'Predmeti Korisnika', 'url'=>array('/predmetiUsera/admin', 'view'=>'about'),'visible'=>Yii::app()->user->checkAccess('profesor')),
                                array('label'=>'Odgovori', 'url'=>array('/odgovor/admin'), 'visible'=>Yii::app()->user->checkAccess('ucenik')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Administracija', 'url'=>array('/administracija/user'), 'visible'=>Yii::app()->user->checkAccess('superuser')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                                
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
