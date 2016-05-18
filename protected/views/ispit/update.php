<?php
/* @var $this IspitController */
/* @var $model Ispit */

$this->breadcrumbs=array(
	'Ispiti'=>array('index'),
	$model->idispit=>array('view','id'=>$model->idispit),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ispit', 'url'=>array('index')),
	array('label'=>'Create Ispit', 'url'=>array('create')),
	array('label'=>'View Ispit', 'url'=>array('view', 'id'=>$model->idispit)),
	array('label'=>'Manage Ispit', 'url'=>array('admin')),
);
?>

<h1>Update Ispit <?php echo $model->idispit; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>