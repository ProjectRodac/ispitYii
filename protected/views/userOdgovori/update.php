<?php
/* @var $this UserOdgovoriController */
/* @var $model UserOdgovori */

$this->breadcrumbs=array(
	'User Odgovoris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserOdgovori', 'url'=>array('index')),
	array('label'=>'Create UserOdgovori', 'url'=>array('create')),
	array('label'=>'View UserOdgovori', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserOdgovori', 'url'=>array('admin')),
);
?>

<h1>Update UserOdgovori <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>