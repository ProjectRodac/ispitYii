<?php
/* @var $this OdgovorController */
/* @var $model Odgovor */

$this->breadcrumbs=array(
	'Odgovors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Odgovor', 'url'=>array('index')),
	array('label'=>'Manage Odgovor', 'url'=>array('admin')),
);
?>

<h1>Create Odgovor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>