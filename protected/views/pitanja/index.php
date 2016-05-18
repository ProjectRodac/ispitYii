<?php
/* @var $this PitanjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pitanjas',
);

$this->menu=array(
	array('label'=>'Create Pitanja', 'url'=>array('create')),
	array('label'=>'Manage Pitanja', 'url'=>array('admin')),
);
?>

<h1>Pitanjas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
