<?php
/* @var $this PredmetiUseraController */
/* @var $model PredmetiUsera */

$this->breadcrumbs=array(
	'Predmeti Useras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PredmetiUsera', 'url'=>array('index')),
	array('label'=>'Create PredmetiUsera', 'url'=>array('create')),
	array('label'=>'Update PredmetiUsera', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PredmetiUsera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PredmetiUsera', 'url'=>array('admin')),
);
?>

<h1>Pregled predmeta korisnika #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'predmet_idPredmet',
		'id',
	),
)); ?>
