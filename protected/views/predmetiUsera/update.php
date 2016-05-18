<?php
/* @var $this PredmetiUseraController */
/* @var $model PredmetiUsera */

$this->breadcrumbs=array(
	'Predmeti Useras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PredmetiUsera', 'url'=>array('index')),
	array('label'=>'Create PredmetiUsera', 'url'=>array('create')),
	array('label'=>'View PredmetiUsera', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PredmetiUsera', 'url'=>array('admin')),
);
?>

<h1>Update PredmetiUsera <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>