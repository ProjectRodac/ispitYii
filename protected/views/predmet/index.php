<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Predmeti',
);

$this->menu=array(
	array('label'=>'Kreiraj Predmet', 'url'=>array('create')),
	array('label'=>'Predmet', 'url'=>array('admin')),
);
?>

<h1>Predmets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
