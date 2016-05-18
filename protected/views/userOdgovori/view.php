<?php
/* @var $this UserOdgovoriController */
/* @var $model UserOdgovori */

$this->breadcrumbs=array(
	'User Odgovoris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserOdgovori', 'url'=>array('index')),
	array('label'=>'Create UserOdgovori', 'url'=>array('create')),
	array('label'=>'Update UserOdgovori', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserOdgovori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserOdgovori', 'url'=>array('admin')),
);
?>

<h1>View UserOdgovori #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'odgovor_idOdgovor',
		'id',
	),
)); ?>
