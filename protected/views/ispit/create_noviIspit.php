<?php
/* @var $this IspitController */
/* @var $model Ispit */
$idPredmet=$_GET["id"];
$this->breadcrumbs=array(
	'Ispiti'=>array('index'),
	'Create',
);
$predmet=Predmet::model()->findByPk($model->predmet_idPredmet);
$naziv=$predmet['naziv'];
?>

<h1>Kreiraj ispit za predmet: <?php echo $naziv; ?></h1>

<?php
//$model->predmet_idPredmet=$idPredmet;
$this->renderPartial('_formNoviIspit', array('model'=>$model)); ?>