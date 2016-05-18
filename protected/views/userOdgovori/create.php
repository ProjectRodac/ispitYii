<?php
/* @var $this UserOdgovoriController */
/* @var $model UserOdgovori */

$this->breadcrumbs=array(
	'User Odgovoris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserOdgovori', 'url'=>array('index')),
	array('label'=>'Manage UserOdgovori', 'url'=>array('admin')),
);
?>

<h1>Create UserOdgovori</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>