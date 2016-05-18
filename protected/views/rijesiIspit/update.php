<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmeti'=>array('index'),
	$model->idPredmet=>array('view','id'=>$model->idPredmet),
	'Update',
);

$this->menu=array(
	array('label'=>'List Predmet', 'url'=>array('index')),
	array('label'=>'Create Predmet', 'url'=>array('create')),
	array('label'=>'View Predmet', 'url'=>array('view', 'id'=>$model->idPredmet)),
	array('label'=>'Manage Predmet', 'url'=>array('admin')),
);
?>

<h1>Update Predmet <?php echo $model->idPredmet; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>