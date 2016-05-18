<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */

$this->breadcrumbs=array(
	'Pitanjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pitanja', 'url'=>array('index')),
	array('label'=>'Manage Pitanja', 'url'=>array('admin')),
);
?>

<h1>Create Pitanja</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>