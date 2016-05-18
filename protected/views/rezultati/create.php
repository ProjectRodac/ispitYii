<?php
/* @var $this RezultatiController */
/* @var $model Rezultati */

$this->breadcrumbs=array(
	'Rezultatis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rezultati', 'url'=>array('index')),
	array('label'=>'Manage Rezultati', 'url'=>array('admin')),
);
?>

<h1>Create Rezultati</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>