<?php
/* @var $this UserOdgovoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Odgovoris',
);

$this->menu=array(
	array('label'=>'Create UserOdgovori', 'url'=>array('create')),
	array('label'=>'Manage UserOdgovori', 'url'=>array('admin')),
);
?>

<h1>User Odgovoris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
