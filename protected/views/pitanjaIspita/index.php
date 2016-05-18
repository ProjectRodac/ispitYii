<?php
/* @var $this PitanjaIspitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pitanja Ispitas',
);

$this->menu=array(
	array('label'=>'Create PitanjaIspita', 'url'=>array('create')),
	array('label'=>'Manage PitanjaIspita', 'url'=>array('admin')),
);
?>

<h1>Pitanja Ispitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
