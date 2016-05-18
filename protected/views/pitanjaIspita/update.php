<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */

$this->breadcrumbs=array(
	'Pitanja Ispitas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PitanjaIspita', 'url'=>array('index')),
	array('label'=>'Create PitanjaIspita', 'url'=>array('create')),
	array('label'=>'View PitanjaIspita', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PitanjaIspita', 'url'=>array('admin')),
);
?>

<h1>Update PitanjaIspita <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>