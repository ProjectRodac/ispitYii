<?php
/* @var $this IspitController */
/* @var $model Ispit */

$this->breadcrumbs=array(
	'Ispiti'=>array('index'),
	$model->idispit,
);

$this->menu=array(
	array('label'=>'Pregled', 'url'=>array('index')),
	array('label'=>'Kreiranje ispita', 'url'=>array('create')),
	array('label'=>'Ažuriranje ispita', 'url'=>array('update', 'id'=>$model->idispit)),
	array('label'=>'Brisanje ispita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idispit),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Upravljanje ispitima', 'url'=>array('admin')),
);
?>

<h1>Ispit: <?php echo $model->naziv_ispita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idispit',
		'naziv_ispita',
		'opis_ispita',
		'predmet_idPredmet',
		'objavljen',
		'rijesen',
                'predmetIdPredmet.Predmet',
	),
)); ?>
