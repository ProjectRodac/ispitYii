<?php
/* @var $this RezultatiController */
/* @var $model Rezultati */

$this->breadcrumbs=array(
	'Rezultatis'=>array('index'),
	$model->idRezultat=>array('view','id'=>$model->idRezultat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rezultati', 'url'=>array('index')),
	array('label'=>'Create Rezultati', 'url'=>array('create')),
	array('label'=>'View Rezultati', 'url'=>array('view', 'id'=>$model->idRezultat)),
	array('label'=>'Manage Rezultati', 'url'=>array('admin')),
);
?>

<h1>Update Rezultati <?php echo $model->idRezultat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>