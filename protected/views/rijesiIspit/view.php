<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmeti'=>array('index'),
	$model->idPredmet,
);

$this->menu=array(
	array('label'=>'List Predmet', 'url'=>array('index')),
	array('label'=>'Create Predmet', 'url'=>array('create')),
	array('label'=>'Update Predmet', 'url'=>array('update', 'id'=>$model->idPredmet)),
	array('label'=>'Delete Predmet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPredmet),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Predmet', 'url'=>array('admin')),
);
?>

<h1>View Predmet #<?php echo $model->idPredmet; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPredmet',
		'naziv',
	),
)); ?>
