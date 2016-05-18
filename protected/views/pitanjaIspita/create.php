<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */

$this->breadcrumbs=array(
	'Pitanja Ispitas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PitanjaIspita', 'url'=>array('index')),
	array('label'=>'Manage PitanjaIspita', 'url'=>array('admin')),
);
?>

<h1>Create PitanjaIspita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>