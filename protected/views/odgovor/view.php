<?php
/* @var $this OdgovorController */
/* @var $model Odgovor */

$this->breadcrumbs=array(
	'Odgovors'=>array('index'),
	$model->idOdgovor,
);

$this->menu=array(
	array('label'=>'List Odgovor', 'url'=>array('index')),
	array('label'=>'Create Odgovor', 'url'=>array('create')),
	array('label'=>'Update Odgovor', 'url'=>array('update', 'id'=>$model->idOdgovor)),
	array('label'=>'Delete Odgovor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOdgovor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Odgovor', 'url'=>array('admin')),
);
?>

<h1>View Odgovor #<?php echo $model->idOdgovor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOdgovor',
		'tocan',
		'odgovor',
		'pitanja_idpitanja',
	),
)); ?>
