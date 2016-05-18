<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Predmet', 'url'=>array('index')),
	array('label'=>'Manage Predmet', 'url'=>array('admin')),
);
?>

<h1>Create Predmet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>