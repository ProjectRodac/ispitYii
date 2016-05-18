<?php
/* @var $this OdgovorController */
/* @var $model Odgovor */

$this->breadcrumbs=array(
	'Odgovors'=>array('index'),
	$model->idOdgovor=>array('view','id'=>$model->idOdgovor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Odgovor', 'url'=>array('index')),
	array('label'=>'Create Odgovor', 'url'=>array('create')),
	array('label'=>'View Odgovor', 'url'=>array('view', 'id'=>$model->idOdgovor)),
	array('label'=>'Manage Odgovor', 'url'=>array('admin')),
);
?>

<h1>Update Odgovor <?php echo $model->idOdgovor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>