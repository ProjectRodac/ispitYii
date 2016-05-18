<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */

$this->breadcrumbs=array(
	'Pitanja Ispitas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PitanjaIspita', 'url'=>array('index')),
	array('label'=>'Create PitanjaIspita', 'url'=>array('create')),
	array('label'=>'Update PitanjaIspita', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PitanjaIspita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PitanjaIspita', 'url'=>array('admin')),
);
?>

<h1>View PitanjaIspita #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pitanja_idpitanja',
		'ispit_idispit',
		'id',
	),
)); ?>
