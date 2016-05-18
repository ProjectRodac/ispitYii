<?php
/* @var $this RezultatiController */
/* @var $model Rezultati */

$this->breadcrumbs=array(
	'Rezultatis'=>array('index'),
	$model->idRezultat,
);

$this->menu=array(
	array('label'=>'List Rezultati', 'url'=>array('index')),
	array('label'=>'Create Rezultati', 'url'=>array('create')),
	array('label'=>'Update Rezultati', 'url'=>array('update', 'id'=>$model->idRezultat)),
	array('label'=>'Delete Rezultati', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRezultat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rezultati', 'url'=>array('admin')),
);
?>

<h1>View Rezultati #<?php echo $model->idRezultat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ispit_idispit',
		'user_id',
		'idRezultat',
		'brTocnihOdgovora',
	),
)); ?>
