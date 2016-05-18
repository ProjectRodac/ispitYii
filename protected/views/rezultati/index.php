<?php
/* @var $this RezultatiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rezultatis',
);

$this->menu=array(
	array('label'=>'Create Rezultati', 'url'=>array('create')),
	array('label'=>'Manage Rezultati', 'url'=>array('admin')),
);
?>

<h1>Rezultatis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
