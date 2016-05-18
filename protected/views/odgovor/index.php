<?php
/* @var $this OdgovorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Odgovors',
);

$this->menu=array(
	array('label'=>'Create Odgovor', 'url'=>array('create')),
	array('label'=>'Manage Odgovor', 'url'=>array('admin')),
);
?>

<h1>Odgovors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
