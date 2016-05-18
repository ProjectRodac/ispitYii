<?php
/* @var $this PredmetiUseraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Predmeti Useras',
);

$this->menu=array(
	array('label'=>'Create PredmetiUsera', 'url'=>array('create')),
	array('label'=>'Manage PredmetiUsera', 'url'=>array('admin')),
);
?>

<h1>Predmeti Useras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
