<?php
/* @var $this IspitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ispiti',
);

$this->menu=array(
	array('label'=>'Create Ispit', 'url'=>array('create')),
	array('label'=>'Manage Ispit', 'url'=>array('admin')),
);
?>

<h1>Ispits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
