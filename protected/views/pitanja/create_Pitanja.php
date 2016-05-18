<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */

$this->breadcrumbs=array(
	'Pitanjas'=>array('index'),
	'Create_Pitanja',
);

$this->menu=array(
	array('label'=>'List Pitanja', 'url'=>array('index')),
	array('label'=>'Manage Pitanja', 'url'=>array('admin')),
);
$predmet=Predmet::model()->findByPk($model->predmet_idPredmet);
$naziv=$predmet['naziv'];
?>

<h1>Kreiraj pitanje za predmet: <?php echo $naziv; ?></h1>

<?php $this->renderPartial('_formPitanja', array('model'=>$model)); ?>