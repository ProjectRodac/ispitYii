<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */

$this->breadcrumbs=array(
	'Pitanjas'=>array('index'),
	$model->idpitanja=>array('view','id'=>$model->idpitanja),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pitanja', 'url'=>array('index')),
	array('label'=>'Create Pitanja', 'url'=>array('create')),
	array('label'=>'View Pitanja', 'url'=>array('view', 'id'=>$model->idpitanja)),
	array('label'=>'Manage Pitanja', 'url'=>array('admin')),
);
?>

<h1>Update Pitanja <?php echo $model->idpitanja; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>