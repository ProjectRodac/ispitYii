<?php
/* @var $this IspitController */
/* @var $model Ispit */

$this->breadcrumbs=array(
	'Ispiti'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ispit', 'url'=>array('index')),
	array('label'=>'Manage Ispit', 'url'=>array('admin')),
);
?>

<h1>Create Ispit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>