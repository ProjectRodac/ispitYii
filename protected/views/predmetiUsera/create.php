<?php
/* @var $this PredmetiUseraController */
/* @var $model PredmetiUsera */

$this->breadcrumbs=array(
	'Predmeti Useras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PredmetiUsera', 'url'=>array('index')),
	array('label'=>'Manage PredmetiUsera', 'url'=>array('admin')),
);
?>

<h1>Create PredmetiUsera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>